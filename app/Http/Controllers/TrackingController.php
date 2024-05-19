<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipments;

class TrackingController extends Controller
{
    public function tracking(Request $request){
        $booking_no = request('tracking_id');
        $shipment =  Shipments::where('booking_number', $booking_no )->first();
        if($shipment){
            $boxes = $shipment->boxes;
            // dd($boxes[1]->boxStatuses->last()->status_id );
            $track = collect([]);
            foreach($boxes as $i=>$data){
                $status_id = $data->boxStatuses->last()? $data->boxStatuses->last()->status_id : null;
                if($status_id == 2){
                    $level = 1;  //Shipment booked
                }
                elseif($status_id == 1){
                    $level = 2;  //Shipment received
                }
                elseif($status_id == 3){
                    $level = 3;  //Shipment forwarded
                }
                elseif($status_id == 4){
                    $level = 4;  //Shipment arrived
                }
                elseif($status_id == 5){
                    $level = 5;  //Waiting for clearance
                }
                elseif($status_id == 10){
                    $level = 6;  //Out for Delivery
                }
                elseif($status_id == 13){
                    $level = 7;  //Pending
                }
                elseif($status_id == 7){
                    $level = 8; // hold
                }
                elseif($status_id == 12){
                    $level = 9;  //Not Delivered
                }
                elseif($status_id == 18){
                    $level = 10;  //Out for Delivery
                }
                elseif($status_id == 9){
                    $level = 11; //Delivered
                }
                else{
                    $level = null;
                }

                $track[$i] = collect([
                    'box_name' => $data->box_name,
                    'level'=>$level,
                    'comment'=>$data->boxStatuses->last()? $data->boxStatuses->last()->comment : null,
                    'date' =>$data->boxStatuses->last()? $data->boxStatuses->last()->created_at : null
                ]);
            }

            $invoice_status = $shipment->status_id;
            if($invoice_status == 2 || $invoice_status == 15 ){
                $invoice_level = 1;  //Shipment booked
            }
            elseif($invoice_status == 1){
                $invoice_level = 2;  //Shipment received
            }
            elseif($invoice_status == 3){
                $invoice_level = 3;  //Shipment forwarded
            }
            elseif($invoice_status == 4){
                $invoice_level = 4;  //Shipment arrived
            }
            elseif($invoice_status == 5){
                $invoice_level = 5;  //Waiting for clearance
            }
            elseif($invoice_status == 10){
                $invoice_level = 6;  //Out for Delivery
            }
            elseif($invoice_status == 13){
                $invoice_level = 7;  //Pending
            }
            elseif($invoice_status == 7){
                $invoice_level = 8; // hold
            }
            elseif($invoice_status == 12){
                $invoice_level = 9;  //Not Delivered
            }
            elseif($invoice_status == 18){
                $invoice_level = 10;
            }
            elseif($invoice_status == 9){
                $invoice_level = 11; //Delivered
            }
            else{
                $invoice_level = null;
            }

            return view('frontend.tracking',compact('track', 'invoice_level', 'booking_no', 'shipment'));
        }
        else{
            $error = 'Invoice is not found';
            return view('frontend.tracking',compact('booking_no','error' ));
        }

    }
}
