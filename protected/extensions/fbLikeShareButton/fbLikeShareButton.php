<?php
/**
 *fbLikeShareButton.php
 *
 * @author Rohit Suthar <rohitsuthar@gmail.com>
 * @copyright 2015 Rohit Suthar
 * @package fbLikeShareButton
 * @version 1.0
 * @Like Us on -  https://facebook.com/yiiexperts
 * @Follow Us on -  https://twitter.com/yiiexperts
 * @Mail -  yiiexpert@gmail.com
 * @For More Extension Visit -  www.yiiframework.us
 */
 

class fbLikeShareButton extends CInputWidget
{
	
	/**
	 * @var array available for facebook like, recommend and share button
	 */	
			  
		  
	public $fbbutton = array(
			'url'=>'https://facebook.com/pakardi15',  //http://www.facebook.com/fb_page
			'action'=>'share', //Display button - like, recommend 
			'width'=>'200', //Layout width
			'height'=>'50', //Layout height
			'layout'=>'standard', //Layout - standard, button_count, button, box_count
			'color_scheme'=>'light', //Layout color scheme - light, dark
			'show_share'=>'true', //Display share button - true, false 
			'show_faces'=>'true', //Show user faces - true, false
		  );


	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{
		self::renderFbButton();
	}


	/**
	 * Render like, recommend and share button extension
	 *
	 * @return nothing
	 */

	 private function renderFbButton(){
		 
		  $rendered = array('url'=>$this->fbbutton['url'],
		  					'action'=>$this->fbbutton['action'],
							'width'=>$this->fbbutton['width'],
							'height'=>$this->fbbutton['height'],
							'layout'=>$this->fbbutton['layout'],
							'color_scheme'=>$this->fbbutton['color_scheme'],
							'show_share'=>$this->fbbutton['show_share'],
							'show_faces'=>$this->fbbutton['show_faces']
						);
		  
		echo $this->render('fb', array('rendered'=>$rendered));
	}
}

?>
