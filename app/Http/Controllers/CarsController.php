<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class CarsController extends Controller
{
    public function index() {
        $carDetailsQuery  = DB::table('car_details')
        ->select(
            'car_details.id',
            'car_details.name',
            'car_details.price',
            'car_details.fuel_efficiency',
            'car_company.company AS company_name',
            'color.color AS color_name',
            'car_type.type AS type_name',
            'car_engine_details.displacement AS engine_displacement',
            'car_engine_details.maximum_power AS engine_power',
            'car_engine_details.maximum_torque AS engine_torque',
            'engine_type.type AS engine_type',
            'car_transmission_details.transmission_type',
            'car_transmission_details.gears',
            'car_dimensions_details.length',
            'car_dimensions_details.width',
            'car_dimensions_details.height',
            'car_dimensions_details.wheelbase',
            'car_features_and_amenities_details.entertainment_system',
            'car_features_and_amenities_details.safety_system',
            'car_details.image'
        )
        ->join('car_company', 'car_details.company_id', '=', 'car_company.id')
        ->join('color', 'car_details.color_id', '=', 'color.id')
        ->join('car_type', 'car_details.type_id', '=', 'car_type.id')
        ->join('car_engine_details', 'car_details.engine', '=', 'car_engine_details.id')
        ->join('engine_type', 'car_engine_details.engine_type', '=', 'engine_type.id')
        ->join('car_transmission_details', 'car_details.transmission', '=', 'car_transmission_details.id')
        ->join('car_dimensions_details', 'car_details.dimensions', '=', 'car_dimensions_details.id')
        ->join('car_features_and_amenities_details', 'car_details.features_and_amenities', '=', 'car_features_and_amenities_details.id');
        $car_details = $carDetailsQuery->orderBy('car_details.id')->get();
        return view('home', compact('car_details'));
    }

    public function goCatalogue(Request $request) {
        $carDetailsQuery  = DB::table('car_details')
        ->select(
            'car_details.id',
            'car_details.name',
            'car_details.price',
            'car_details.fuel_efficiency',
            'car_company.company AS company_name',
            'color.color AS color_name',
            'car_type.type AS type_name',
            'car_engine_details.displacement AS engine_displacement',
            'car_engine_details.maximum_power AS engine_power',
            'car_engine_details.maximum_torque AS engine_torque',
            'engine_type.type AS engine_type',
            'car_transmission_details.transmission_type',
            'car_transmission_details.gears',
            'car_dimensions_details.length',
            'car_dimensions_details.width',
            'car_dimensions_details.height',
            'car_dimensions_details.wheelbase',
            'car_features_and_amenities_details.entertainment_system',
            'car_features_and_amenities_details.safety_system',
            'car_details.image'
        )
        ->join('car_company', 'car_details.company_id', '=', 'car_company.id')
        ->join('color', 'car_details.color_id', '=', 'color.id')
        ->join('car_type', 'car_details.type_id', '=', 'car_type.id')
        ->join('car_engine_details', 'car_details.engine', '=', 'car_engine_details.id')
        ->join('engine_type', 'car_engine_details.engine_type', '=', 'engine_type.id')
        ->join('car_transmission_details', 'car_details.transmission', '=', 'car_transmission_details.id')
        ->join('car_dimensions_details', 'car_details.dimensions', '=', 'car_dimensions_details.id')
        ->join('car_features_and_amenities_details', 'car_details.features_and_amenities', '=', 'car_features_and_amenities_details.id');
        
        
        if ($request->filter) {
            if ($request->type) {
                if ($request->type == 'high2low') {
                    $car_details = $carDetailsQuery->orderByDesc('car_details.price')->paginate(6);
                } else if ($request->type == 'low2high') {
                    $car_details = $carDetailsQuery->orderBy('car_details.price')->paginate(6);
                }
            };
            if ($request->filter == 'left') {
                if ($request->brandtype) {
                    if (str_contains($request->brandtype, '%')) {
                        $brandtypes = explode('%', $request->brandtype);
                    } else {
                        $brandtypes = [$request->brandtype];
                    };
                    $brandtypes = array_map('intval', $brandtypes); // Convert array of strings to array of integers
                    $car_details = $carDetailsQuery->whereIn('car_details.company_id', $brandtypes)->paginate(6);
                };
                if ($request->vehicletype) {
                    if (str_contains($request->vehicletype, '%')) {
                        $vehicletypes = explode('%', $request->vehicletype);
                    } else {
                        $vehicletypes = [$request->vehicletype];
                    };
                    $vehicletypes = array_map('intval', $vehicletypes); // Convert array of strings to array of integers
                    $car_details = $carDetailsQuery->whereIn('car_details.type_id', $vehicletypes)->paginate(6);
                };
                if ($request->color) {
                    if (str_contains($request->color, '%')) {
                        $colors = explode('%', $request->color);
                    } else {
                        $colors = [$request->color];
                    };
                    $colors = array_map('intval', $colors); // Convert array of strings to array of integers
                    $colors = [1,2,3,4,5,6,7,8];
                    $car_details = $carDetailsQuery->whereIn('car_details.color_id', $colors)->paginate(6);
                };

            };
            if ($request->filter == 'search') {
                $car_details = $carDetailsQuery->where('car_details.name', 'like', "%$request->keyword%")->paginate(6);   
            }
            if ($request->filter == 'inrange') {
                $car_details = $carDetailsQuery->whereBetween('car_details.price', [$request->minpay, $request->maxpay])->paginate(6);
            }
        } else {
            $car_details = $carDetailsQuery->paginate(6);
        }
        // print_r($car_details);
        return view('catalogue', compact('car_details'));
    }

    public function goCatalogueType() {
        $car = DB::table('motor_details')->get();
        return view('catalogue2', compact('products'));
    }

    public function goVehicleDetail($vehicle_type, $id) {
        if ($vehicle_type == 'car') {
            $vehicleDetails = DB::table('car_details')
            ->select(
                'car_details.id',
                'car_details.name',
                'car_details.price',
                'car_details.fuel_efficiency',
                'car_details.type_id',
                'car_company.company AS company_name',
                'color.color AS color_name',
                'car_type.type AS type_name',
                'car_engine_details.displacement AS engine_displacement',
                'car_engine_details.maximum_power AS engine_power',
                'car_engine_details.maximum_torque AS engine_torque',
                'engine_type.type AS engine_type',
                'car_transmission_details.transmission_type',
                'car_transmission_details.gears',
                'car_dimensions_details.length',
                'car_dimensions_details.width',
                'car_dimensions_details.height',
                'car_dimensions_details.wheelbase',
                'car_features_and_amenities_details.entertainment_system',
                'car_features_and_amenities_details.safety_system',
                'car_details.image'
            )
            ->join('car_company', 'car_details.company_id', '=', 'car_company.id')
            ->join('color', 'car_details.color_id', '=', 'color.id')
            ->join('car_type', 'car_details.type_id', '=', 'car_type.id')
            ->join('car_engine_details', 'car_details.engine', '=', 'car_engine_details.id')
            ->join('engine_type', 'car_engine_details.engine_type', '=', 'engine_type.id')
            ->join('car_transmission_details', 'car_details.transmission', '=', 'car_transmission_details.id')
            ->join('car_dimensions_details', 'car_details.dimensions', '=', 'car_dimensions_details.id')
            ->join('car_features_and_amenities_details', 'car_details.features_and_amenities', '=', 'car_features_and_amenities_details.id')
            ->where('car_details.id', '=', $id)
            ->get();
            $vehicleId = '1';
        } else if ($vehicle_type == 'motor') {
            $motorDetailsQuery = DB::table('motor_details as md')
            ->select(
                'md.id',
                'md.name',
                'mc.company AS company_name',
                'me.engine_type',
                'me.displacement',
                'me.maximum_power AS engine_power',
                'me.maximum_torque AS engine_torque',
                'mt.transmission_type',
                'mt.gears',
                'c.color AS color_name',
                'md.fual_tank_capacity',
                'md.price',
                'md.img AS image'
            )
            ->join('motor_engine_details as me', 'md.engine', '=', 'me.id')
            ->join('motor_transmission_details as mt', 'md.transmission', '=', 'mt.id')
            ->join('motor_company as mc', 'md.company_id', '=', 'mc.id')
            ->join('color as c', 'md.color_id', '=', 'c.id');
            $vehicleDetails = $motorDetailsQuery->where('md.id', '=', $id)->get();
            $vehicleId = '2';
        }
        return view('cardetail', compact('vehicleDetails', 'vehicleId'));
    }

    public function goCompare() {
        return view('compare');
    }

    public function compare($id1, $id2) {
        // $prices = DB::table('car_details')
        // ->select('car_details.price')
        // ->where('id', '=', $id1)
        // ->orWhere('id', '=', $id2)
        // ->get();
        $carDetails = DB::table('car_details')
        ->select(
            'car_details.id',
            'car_details.name',
            'car_details.price',
            'car_details.type_id',
            'car_details.fuel_efficiency',
            'car_company.company AS company_name',
            'color.color AS color_name',
            'car_type.type AS type_name',
            'car_engine_details.displacement AS engine_displacement',
            'car_engine_details.maximum_power AS engine_power',
            'car_engine_details.maximum_torque AS engine_torque',
            'engine_type.type AS engine_type',
            'car_transmission_details.transmission_type',
            'car_transmission_details.gears',
            'car_dimensions_details.length',
            'car_dimensions_details.width',
            'car_dimensions_details.height',
            'car_dimensions_details.wheelbase',
            'car_features_and_amenities_details.entertainment_system',
            'car_features_and_amenities_details.safety_system',
            'car_details.image'
        )
        ->join('car_company', 'car_details.company_id', '=', 'car_company.id')
        ->join('color', 'car_details.color_id', '=', 'color.id')
        ->join('car_type', 'car_details.type_id', '=', 'car_type.id')
        ->join('car_engine_details', 'car_details.engine', '=', 'car_engine_details.id')
        ->join('engine_type', 'car_engine_details.engine_type', '=', 'engine_type.id')
        ->join('car_transmission_details', 'car_details.transmission', '=', 'car_transmission_details.id')
        ->join('car_dimensions_details', 'car_details.dimensions', '=', 'car_dimensions_details.id')
        ->join('car_features_and_amenities_details', 'car_details.features_and_amenities', '=', 'car_features_and_amenities_details.id')
        ->where('car_details.id', '=', $id1)
        ->orWhere('car_details.id', '=', $id2)
        ->get();
        // print_r($carDetails[0]);
        $content = ["img/1_$id1.avif", "img/1_$id2.avif"];
        if ($id1 > $id2) {
            $imgs = ["img/1_$id2.avif", "img/1_$id1.avif"];
        } else {
            $imgs = ["img/1_$id1.avif", "img/1_$id2.avif"];
        };
        
        return view('compareDetail', compact('imgs', 'carDetails'));
    }

    public function goContact() {
        return view('contact');
    }

    public function goRegister() {
        return view('register');
    }

    public function goWarranty() {
        return view('warranty');
    }

    public function goWarrantyBrand($brand) {
        return view("warranty-$brand");
    }

    public function goFinance() {
        return view('finance');
    }

    public function goFindDealer() {
        return view('findDealer');
    }














    #MOTOR -------------------------------------------------------------------------------------------------------------
    public function goCatalogue2(Request $request) {
        $carDetailsQuery = DB::table('motor_details as md')
        ->select(
            'md.id',
            'md.name',
            'mc.company AS company_name',
            'me.engine_type',
            'me.displacement',
            'me.maximum_power AS engine_power',
            'me.maximum_torque AS engine_torque',
            'mt.transmission_type',
            'mt.gears',
            'c.color AS color_name',
            'md.fual_tank_capacity',
            'md.price',
            'md.img AS image'
        )
        ->join('motor_engine_details as me', 'md.engine', '=', 'me.id')
        ->join('motor_transmission_details as mt', 'md.transmission', '=', 'mt.id')
        ->join('motor_company as mc', 'md.company_id', '=', 'mc.id')
        ->join('color as c', 'md.color_id', '=', 'c.id');
        
        if ($request->filter) {
            if ($request->type) {
                if ($request->type == 'high2low') {
                    $car_details = $carDetailsQuery->orderByDesc('md.price')->paginate(6);
                } else if ($request->type == 'low2high') {
                    $car_details = $carDetailsQuery->orderBy('md.price')->paginate(6);
                }
            };
            if ($request->filter == 'left') {
                if ($request->brandtype) {
                    if (str_contains($request->brandtype, '%')) {
                        $brandtypes = explode('%', $request->brandtype);
                    } else {
                        $brandtypes = [$request->brandtype];
                    };
                    $brandtypes = array_map('intval', $brandtypes); // Convert array of strings to array of integers
                    $car_details = $carDetailsQuery->whereIn('md.company_id', $brandtypes)->paginate(6);
                };
                if ($request->vehicletype) {
                    if (str_contains($request->vehicletype, '%')) {
                        $vehicletypes = explode('%', $request->vehicletype);
                    } else {
                        $vehicletypes = [$request->vehicletype];
                    };
                    $vehicletypes = array_map('intval', $vehicletypes); // Convert array of strings to array of integers
                    $car_details = $carDetailsQuery->whereIn('md.type_id', $vehicletypes)->paginate(6);
                };
                if ($request->color) {
                    if (str_contains($request->color, '%')) {
                        $colors = explode('%', $request->color);
                    } else {
                        $colors = [$request->color];
                    };
                    $colors = array_map('intval', $colors); // Convert array of strings to array of integers
                    $colors = [1,2,3,4,5,6,7,8];
                    $car_details = $carDetailsQuery->whereIn('md.color_id', $colors)->paginate(6);
                };

            };
            if ($request->filter == 'search') {
                $car_details = $carDetailsQuery->where('md.name', 'like', "%$request->keyword%")->paginate(6);   
            }
            if ($request->filter == 'inrange') {
                $car_details = $carDetailsQuery->whereBetween('md.price', [$request->minpay, $request->maxpay])->paginate(6);
            }
        } else {
            $car_details = $carDetailsQuery->paginate(6);
        }
        // print_r($car_details);
        return view('catalogue2', compact('car_details'));
        // return view('finance');
    }
}