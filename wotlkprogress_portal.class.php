<?php
/*	Project:			EQdkp-Plus
 *	Package:			wotlk Progress Module - Portal

 *
 *	Copyright (C) 2021 Motrish	
 *
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

class wotlkprogress_portal extends portal_generic {

	protected static $path		= 'wotlkprogress';
	protected static $data		= array(
		'name'			=> 'Wotlk Progress',
		'version'		=> '1.4',
		'author'		=> 'Motrish (Link to Github)',
		'icon'			=> 'fa-code',
		'contact'		=> 'https://github.com/Motrish/wotlkprogress',
		'description'	=> 'Shows the progress of the Wotlk Raids. https://github.com/Motrish/ ',
		'multiple'		=> true,
		'lang_prefix'	=> 'wotlkprogress_'
		#'information'	=> 'https://github.com/Motrish/'
	);

	protected static $positions = array( 'left1', 'left2', 'right');
	public function get_settings($state){
		$settings	= array(
				#Info
				'wotlk_notes'	=> array(
					'type'		=> 'text',		
					'default'	=> 'https://github.com/Motrish/wotlkprogress',
					'size'		=> 30,
				),



				#Raid 1
			'boss1'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_15'	=> $this->user->lang('wotlk_0_15'),
					'wotlk_1_15'	=> $this->user->lang('wotlk_1_15'),
					'wotlk_2_15'	=> $this->user->lang('wotlk_2_15'),
					'wotlk_3_15'	=> $this->user->lang('wotlk_3_15'),
					'wotlk_4_15'	=> $this->user->lang('wotlk_4_15'),
					'wotlk_5_15'	=> $this->user->lang('wotlk_5_15'),
					'wotlk_6_15'	=> $this->user->lang('wotlk_6_15'),
					'wotlk_7_15'	=> $this->user->lang('wotlk_7_15'),	
					'wotlk_8_15'	=> $this->user->lang('wotlk_8_15'),		
					'wotlk_9_15'	=> $this->user->lang('wotlk_9_15'),
					'wotlk_10_15'	=> $this->user->lang('wotlk_10_15'),	
					'wotlk_11_15'	=> $this->user->lang('wotlk_11_15'),	
					'wotlk_12_15'	=> $this->user->lang('wotlk_12_15'),		
					'wotlk_13_15'	=> $this->user->lang('wotlk_13_15'),
					'wotlk_14_15'	=> $this->user->lang('wotlk_14_15'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
					
				),
			),
				#Raid 2
			'boss2'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_1'	=> $this->user->lang('wotlk_0_1'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),				
				#Raid 3
			'boss3'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),					
					'wotlk_TBD'	=> $this->user->lang('wotlk_TBD'),
					'wotlk_OSclear'	=> $this->user->lang('wotlk_clear'),
					'wotlk_+1'	=> $this->user->lang('wotlk_+1'),
					'wotlk_+2'	=> $this->user->lang('wotlk_+2'),
					'wotlk_+3'	=> $this->user->lang('wotlk_+3'),
					

				),
			),
				#Raid 4
			'boss4'	=> array(
				'type'		=> 'dropdown',		
				'class'		=> 'js_reload',
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),					
					'wotlk_0_14'	=> $this->user->lang('wotlk_0_14'),
					'wotlk_1_14'	=> $this->user->lang('wotlk_1_14'),
					'wotlk_2_14'	=> $this->user->lang('wotlk_2_14'),
					'wotlk_3_14'	=> $this->user->lang('wotlk_3_14'),
					'wotlk_4_14'	=> $this->user->lang('wotlk_4_14'),
					'wotlk_5_14'	=> $this->user->lang('wotlk_5_14'),
					'wotlk_6_14'	=> $this->user->lang('wotlk_6_14'),
					'wotlk_7_14'	=> $this->user->lang('wotlk_7_14'),
					'wotlk_8_14'	=> $this->user->lang('wotlk_8_14'),
					'wotlk_9_14'	=> $this->user->lang('wotlk_9_14'),
					'wotlk_10_14'	=> $this->user->lang('wotlk_10_14'),
					'wotlk_11_14'	=> $this->user->lang('wotlk_11_14'),
					'wotlk_12_14'	=> $this->user->lang('wotlk_12_14'),
					'wotlk_13_14'	=> $this->user->lang('wotlk_13_14'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),

				#Raid 5 PDOK
			'boss5'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_5'	=> $this->user->lang('wotlk_0_5'),
					'wotlk_1_5'	=> $this->user->lang('wotlk_1_5'),
					'wotlk_2_5'	=> $this->user->lang('wotlk_2_5'),
					'wotlk_3_5'	=> $this->user->lang('wotlk_3_5'),
					'wotlk_4_5'	=> $this->user->lang('wotlk_4_5'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),

				),
			),
			#Raid 6 Ony
			'boss6'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_1'	=> $this->user->lang('wotlk_0_1'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),
			#Raid 7 ICC
			'boss7'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_12'	=> $this->user->lang('wotlk_0_12'),
					'wotlk_1_12'	=> $this->user->lang('wotlk_1_12'),
					'wotlk_2_12'	=> $this->user->lang('wotlk_2_12'),
					'wotlk_3_12'	=> $this->user->lang('wotlk_3_12'),
					'wotlk_4_12'	=> $this->user->lang('wotlk_4_12'),
					'wotlk_5_12'	=> $this->user->lang('wotlk_5_12'),
					'wotlk_6_12'	=> $this->user->lang('wotlk_6_12'),
					'wotlk_7_12'	=> $this->user->lang('wotlk_7_12'),
					'wotlk_8_12'	=> $this->user->lang('wotlk_8_12'),
					'wotlk_9_12'	=> $this->user->lang('wotlk_9_12'),
					'wotlk_10_12'	=> $this->user->lang('wotlk_10_12'),
					'wotlk_11_12'	=> $this->user->lang('wotlk_11_12'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),	
			#Raid 8 Ruby
			'boss8'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_1'	=> $this->user->lang('wotlk_0_1'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),
			#Raid 9 Archavon
			'boss9'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'wotlk_notreleased'	=> $this->user->lang('wotlk_notreleased'),
					'wotlk_0_1'	=> $this->user->lang('wotlk_0_1'),
					'wotlk_0_2'	=> $this->user->lang('wotlk_0_2'),
					'wotlk_1_2'	=> $this->user->lang('wotlk_1_2'),
					'wotlk_0_3'	=> $this->user->lang('wotlk_0_3'),
					'wotlk_1_3'	=> $this->user->lang('wotlk_1_3'),
					'wotlk_2_3'	=> $this->user->lang('wotlk_2_3'),
					'wotlk_0_4'	=> $this->user->lang('wotlk_0_4'),
					'wotlk_1_4'	=> $this->user->lang('wotlk_1_4'),
					'wotlk_2_4'	=> $this->user->lang('wotlk_2_4'),
					'wotlk_3_4'	=> $this->user->lang('wotlk_3_4'),
					'wotlk_clear'	=> $this->user->lang('wotlk_clear'),
				),
			),		
		
		);
		
		return $settings;
	}
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'left',
		'defaultnumber'		=> '8',
	);
	
	protected static $apiLevel = 20;

	public function output() {
		$Imagepath=$this->server_path."portal/wotlkprogress/media/images/";
		$arrSettingsArray=array();
		$out="<table style='width:280px;'>";
		$actualBoss=1;		
		while($this->config('boss'.$actualBoss)){
			$arrSettingsArray .= $this->config('boss'.$actualBoss);
			if($this->config('boss'.$actualBoss) == "wotlk_notreleased"){$Down="<font color='red'>".$this->user->lang('wotlk_notreleased')."</font>";}		
						
			if($this->config('boss'.$actualBoss) == "wotlk_clear"){$Down="<font color='lime'>".$this->user->lang('wotlk_clear')."</font>";}				

			#Malygos Onyxia Rubysanctum
			if($this->config('boss'.$actualBoss) == "wotlk_0_1"){$Down="<font color='red'>".$this->user->lang('wotlk_0_1')."</font>";}					 

			#OS
			if($this->config('boss'.$actualBoss) == "wotlk_TBD"){$Down="<font color='red'>".$this->user->lang('wotlk_TBD')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_+1"){$Down="<font color='yellow'>".$this->user->lang('wotlk_+1')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_+2"){$Down="<font color='yellow'>".$this->user->lang('wotlk_+2')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_+3"){$Down="<font color='yellow'>".$this->user->lang('wotlk_+3')."</font>";}	
			if($this->config('boss'.$actualBoss) == "wotlk_+3"){$Down="<font color='lime'>".$this->user->lang('wotlk_+3')."</font>";}	
			if($this->config('boss'.$actualBoss) == "wotlk_OSclear"){$Down="<font color='yellow'>".$this->user->lang('wotlk_clear')."</font>";}										 
				 
			#PDK
			if($this->config('boss'.$actualBoss) == "wotlk_0_5"){$Down="<font color='red'>".$this->user->lang('wotlk_0_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_1_5"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_2_5"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_3_5"){$Down="<font color='yellow'>".$this->user->lang('wotlk_3_5')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_4_5"){$Down="<font color='yellow'>".$this->user->lang('wotlk_4_5')."</font>";}					

			#ICC
			if($this->config('boss'.$actualBoss) == "wotlk_0_12"){$Down="<font color='red'>".$this->user->lang('wotlk_0_12')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_1_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_2_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_3_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_3_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_4_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_4_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_5_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_5_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_6_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_6_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_7_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_7_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_8_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_8_12')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_9_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_9_12')."</font>";}	
			if($this->config('boss'.$actualBoss) == "wotlk_10_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_10_12')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_11_12"){$Down="<font color='yellow'>".$this->user->lang('wotlk_11_12')."</font>";}

			#Ulduar
			if($this->config('boss'.$actualBoss) == "wotlk_0_14"){$Down="<font color='red'>".$this->user->lang('wotlk_0_14')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_1_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_2_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_3_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_3_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_4_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_4_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_5_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_5_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_6_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_6_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_7_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_7_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_8_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_8_14')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_9_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_9_14')."</font>";}	
			if($this->config('boss'.$actualBoss) == "wotlk_10_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_10_14')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_11_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_11_14')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_12_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_12_14')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_13_14"){$Down="<font color='yellow'>".$this->user->lang('wotlk_13_14')."</font>";}


			#Naxx
			if($this->config('boss'.$actualBoss) == "wotlk_0_15"){$Down="<font color='red'>".$this->user->lang('wotlk_0_15')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_1_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_2_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_3_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_3_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_4_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_4_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_5_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_5_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_6_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_6_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_7_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_7_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_8_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_8_15')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_9_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_9_15')."</font>";}	
			if($this->config('boss'.$actualBoss) == "wotlk_10_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_10_15')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_11_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_11_15')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_12_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_12_15')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_13_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_13_15')."</font>";}
			if($this->config('boss'.$actualBoss) == "wotlk_14_15"){$Down="<font color='yellow'>".$this->user->lang('wotlk_14_15')."</font>";}

			#Archavon
			if($this->config('boss'.$actualBoss) == "wotlk_0_1"){$Down="<font color='red'>".$this->user->lang('wotlk_0_1')."</font>";}					
			if($this->config('boss'.$actualBoss) == "wotlk_0_2"){$Down="<font color='yellow'>".$this->user->lang('wotlk_0_2')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_1_2"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_2')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_0_3"){$Down="<font color='yellow'>".$this->user->lang('wotlk_0_3')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_1_3"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_3')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_2_3"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_3')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_0_4"){$Down="<font color='yellow'>".$this->user->lang('wotlk_0_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_1_4"){$Down="<font color='yellow'>".$this->user->lang('wotlk_1_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_2_4"){$Down="<font color='yellow'>".$this->user->lang('wotlk_2_4')."</font>";}					 
			if($this->config('boss'.$actualBoss) == "wotlk_3_4"){$Down="<font color='yellow'>".$this->user->lang('wotlk_3_4')."</font>";}	



			$out.="<tr style='border-bottom: 1px solid grey;background:url(".$Imagepath."".$actualBoss.".jpg);background-size:cover;'>
			<td style='text-shadow:1px 1px 5px black;line-height:30px'>
			<font color='white'>
			".$this->user->lang("wotlkprogress_f_boss".$actualBoss)."
			</font>
			</td>
			<td style='text-shadow:1px 1px 5px black;line-height:30px;align=center'>
			".$Down."
			</td>
			</tr>";
			$actualBoss++;
		}		
		$out.="</table>";
		return $out;
	}
}
?>
