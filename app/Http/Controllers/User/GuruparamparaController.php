<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruparamparaController extends Controller
{
	
	public function __construct() 
	{
		
	}
	
    public function index()
	{
		$view=array();
		$view['tree_data'] =
			array(
				
				array(
					'name'=>__('Parampara.gyansagar_ji'),
					'id'=>'main',
					'photo'=> asset("frontend/images/aaryika/gyansagarji.jpg"),
					"is_photo"=>1,
					'link'=> route("aachary_shri_108_gyaan_sagar_maharaj_ji.index"),
				),
				array(
					'name'=>__('Parampara.vidyasagar_ji'),
					'id'=>'5.1',
					'photo'=> asset("frontend/images/aaryika/vidyasagarji.jpg"),
					'parent'=> 'main',
					"is_photo"=>1,
					'link'=> route("aachary_shri_108_vidya_sagar_maharaj_ji.index"),
				),
				array(
					'name'=>__('Parampara.viveksagar_ji'),
					'id'=>'5.2',
					'photo'=> asset("frontend/images/aaryika/viveksagarji.jpg"),
					'parent'=> 'main',
					"is_photo"=>1,
					'link'=> route("aachary_shri_108_vivek_sagar_maharaj_ji.index"),
				),
				array(
					'name'=>__('Parampara.shravan_sangh'),
					'id'=>'5.2.1',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2',
					"is_photo"=>1
				),
				
				array(
					'name'=>__('Parampara.aryika_sangha'),
					'id'=>'5.2.2',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2',
					'dir'=> "vertical",
					"is_photo"=>1
				),
				array(
					'name'=>"संघस्थ्य ब्रह्मचारी गण ",
					'id'=>'5.2.3',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2',
					'dir'=> "vertical",
					"is_photo"=>1
				),
				array(
					'name'=>"ब्र. ज्ञानानंद भैया जी",
					'id'=>'5.2.3.1',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2.3',
					"is_photo"=>1,
				//	'link'=>route("aaryika_maa_105_vipul_mati_mataji.index"),
				    'link'=>route("guru-parampara.index"),
				),
				array(
					'name'=>"ब्र. कंचन दीदी जी",
					'id'=>'5.2.3.2',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2.3',
					"is_photo"=>1,
				//	'link'=>route("aaryika_maa_105_vipul_mati_mataji.index"),
				    'link'=>route("guru-parampara.index"),
				),
				array(
					'name'=>"ब्र. संतोष दीदी जी  ( आर्यिका जाग्रतमति माताजी ) ",
					'id'=>'5.2.3.3',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2.3',
					"is_photo"=>1,
			//		'link'=>route("aaryika_maa_105_vipul_mati_mataji.index"),
			        'link'=>route("guru-parampara.index"),
				),
				array(
					'name'=>__('Parampara.vijayasaagar_ji'),
					'id'=>'5.2.1.1',
					'photo'=> asset("frontend/images/aaryika/vijaysagarji.jpg"),
					'parent'=> '5.2.1',
					"is_photo"=>1,
					'link'=> route("muni_shri_108_vijay_sagar_maharaj_ji.index"),
				),
				array(
					'name'=>__('Parampara.vinaysagar_ji'),
					'id'=>'5.2.1.2',
					'photo'=> asset("frontend/assets/images/default/big-avatar-19.jpg"),
					'parent'=> '5.2.1',
					"is_photo"=>1,
					'link'=> route("muni_shri_108_vinay_sagar_maharaj_ji.index"),
				),
				array(
					'name'=>__('Parampara.vipulmati_mata_ji'),
					'id'=>'5.2.2.1',
					'photo'=> asset("frontend/images/aaryika/vipulmati.jpg"),
					'parent'=> '5.2.2',
					"is_photo"=>1,
					'link'=>route("aaryika_maa_105_vipul_mati_mataji.index"),
				),
				array(
					'name'=>__('Parampara.vishalmati_mata_ji'),
					'id'=>'5.2.2.2',
					'photo'=> asset("frontend/images/aaryika/vishalmati.jpg"),
					'parent'=> '5.2.2',
					'link'=> route("aaryika_maa_105_vishaal_mati_mataji.index"),
				),
				array(
					'name'=>__('Parampara.vigyanmati_mata_ji'),
					'id'=>'5.2.2.3',
					'photo'=> asset("frontend/images/aaryika/vigyan_matiji.jpg"),
					'parent'=> '5.2.2',
					"is_photo"=>1,
					"color"=>'indianred',   
					'link'=> route("aaryika_maa_105_vigyan_mati_mataji.index"),
				),
				array(
					'name'=>__('Parampara.vighutamati_mata_ji'),
					'id'=>'5.2.2.4',
					'photo'=> asset("frontend/images/aaryika/vighutamati.jpg"),
					'parent'=> '5.2.2',
					"is_photo"=>1,
					'link'=> route("aaryika_maa_105_vidhyut_mati_mataji.index"),
				),
			);
		return view('user.guruparampara.index',$view);
	}

}

