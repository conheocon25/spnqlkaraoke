<?php
	namespace MVC\Command;	
	use MVC\Library\Captcha;
	class Home extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			
			$MsgCaptcha = $request->getProperty('MsgCaptcha');			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCaptcha = new Captcha();
			$mCaptcha->createImage();
			$CaptchaSecurited = $mCaptcha->getSecurityCode();
			$Session->setCurrentCaptcha($CaptchaSecurited);
			
			$CaptchaSecurity = $Session->getCurrentCaptcha();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "HỆ THỐNG QUẢN LÝ PHÒNG KARAOKE";
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("CaptchaSecurity", $CaptchaSecurited);		
			$request->setProperty("MsgCaptcha", $MsgCaptcha);
			
			$request->setProperty("Title", $Title);
			$request->setProperty("URLHeader", '/signin/load');
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>