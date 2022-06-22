<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class Auth_regis extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
    }
	
    public function regisRE101()
    {
        $this->load->model("Registrasi");
        $config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/RE101/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/RE101/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/RE101/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors()
		);
        if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
        {
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig']))
			{
				$path = './upload/RE101/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig']))
			{
				$path = './upload/RE101/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory']))
			{
				$path = './upload/RE101/sharestory/';
				unlink($path.$data['sharestory']);
			}
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regisRE101($data);
			echo "1";
		}
    }

	public function regisGrandTalkshow()
	{
	    //var_dump($this->input->post());
        $this->load->model("Registrasi");
        $config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/GrandTalkshow/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/GrandTalkshow/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/GrandTalkshow/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $config['upload_path']	= './upload/GrandTalkshow/twibbon';
        $this->load->library('upload', $config, 'twibbon');
		$this->twibbon->initialize($config);
        $foto = $this->twibbon->do_upload('twibbon');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name'),
			'twibbon'			=> $this->twibbon->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors(),
			'twibbon'			=> $this->twibbon->display_errors()
		);
        //var_dump($this->input->post());
        if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
        {
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig']))
			{
				$path = './upload/GrandTalkshow/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig']))
			{
				$path = './upload/GrandTalkshow/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory']))
			{
				$path = './upload/GrandTalkshow/sharestory/';
				unlink($path.$data['sharestory']);
			}
			if(empty($error['twibbon']))
			{
				$path = './upload/GrandTalkshow/twibbon/';
				unlink($path.$data['twibbon']);
			}
			
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regisGrandTalkshow($data);
			$name = $this->input->post('name');
			$university = $this->input->post('university');
			$email = $this->input->post('email');
			$mail = new PHPMailer(true);
			try
			{
				$mail->isSMTP();
				$mail->Host = "ssl://smtp.gmail.com";
				$mail->SMTPAuth = "true";
				$mail->SMTPSecure = "tls";
				$mail->Port = "465";
				$mail->Username = "futurest.sreits@gmail.com";
				$mail->Password = "SREFuturest!";
				$mail->Subject = "[Confirmation] Grand Talkshow: The Urgency of Climate Change Mitigation";
				$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
				$mail->IsHTML(TRUE);
				$mail->Body = "<!DOCTYPE html>
				<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en' style='box-sizing: border-box;'>

				<head style='box-sizing: border-box;'>
					<title style='box-sizing: border-box;'></title>
					<meta charset='UTF-8' style='box-sizing: border-box;'>
					<meta name='viewport' content='width=device-width, initial-scale=1.0' style='box-sizing: border-box;'>
					<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
					<!--[if !mso]><!-->
					<!--<![endif]-->
				</head>
			
				<body style='background-color: #a8bf6f;margin: 0;padding: 0;-webkit-text-size-adjust: none;text-size-adjust: none;box-sizing: border-box;'>
					<table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #a8bf6f;box-sizing: border-box;'>
						<tbody style='box-sizing: border-box;'>
							<tr style='box-sizing: border-box;'>
								<td style='box-sizing: border-box;'>
									<table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 5px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='image_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='padding-top: 25px;width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
																				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img class='big' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/20/rounder-up.png' style='display: block;height: auto;border: 0;width: 600px;max-width: 100%;box-sizing: border-box;' width='600' alt='Image' title='Image'></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='image_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
																				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/748776_732044/editor_images/3de2b119-24a5-4b95-a76e-c0e485c2e399.png' style='display: block;height: auto;border: 0;width: 120px;max-width: 100%;box-sizing: border-box;' width='120' alt='Image' title='Image'></div>
																			</td>
																		</tr>
																	</table>
																	<table class='heading_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='text-align: center;width: 100%;box-sizing: border-box;'>
																				<h3 style='margin:0;color:#555555;direction:ltr;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:18px;font-weight:normal;letter-spacing:1px;line-height:200%;text-align:center;margin-top:0;margin-bottom:0;'>Future Energy Summit 2022</h3>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-3' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='divider_block' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='box-sizing: border-box;'>
																				<div align='center' style='box-sizing: border-box;'>
																					<table border='0' cellpadding='0' cellspacing='0' role='presentation' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																						<tr style='box-sizing: border-box;'>
																							<td class='divider_inner' style='font-size: 1px;line-height: 1px;border-top: 1px solid #BBBBBB;box-sizing: border-box;'><span style='box-sizing: border-box;'>&#8202;</span></td>
																						</tr>
																					</table>
																				</div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='text_block' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='box-sizing: border-box;'>
																				<div style='font-family: sans-serif;box-sizing: border-box;'>
																					<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																						<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 01px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 20px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><span style='box-sizing: border-box;'><span style='box-sizing: border-box;'>Hello $name,</span></span></strong></span><br style='box-sizing: border-box;'><span style='font-size: 14px;box-sizing: border-box;'>Your registration is completed.</span></p>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</table>
																	<table class='image_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
																				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/20/divider.png' style='display: block;height: auto;border: 0;width: 270px;max-width: 100%;box-sizing: border-box;' width='270' alt='Image' title='Image'></div>
																			</td>
																		</tr>
																	</table>
																	<table class='text_block' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='box-sizing: border-box;'>
																				<div style='font-family: sans-serif;box-sizing: border-box;'>
																					<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																						<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>See you at the Grand Talkshow!<span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																						<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>$name</p>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</table>
																	<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='box-sizing: border-box;'>
																				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img src='http://gen.sendtric.com/countdown/3w6izannan' style='display: block;height: auto;border: 0;width: 400px;max-width: 100%;box-sizing: border-box;' width='400'></div>
																			</td>
																		</tr>
																	</table>
																	<table class='text_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='padding-bottom: 5px;padding-left: 15px;padding-right: 15px;padding-top: 15px;box-sizing: border-box;'>
																				<div style='font-family: sans-serif;box-sizing: border-box;'>
																					<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #555555;line-height: 1.2;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																						<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: normal;box-sizing: border-box;line-height: inherit;'><span style='font-size: 12px;box-sizing: border-box;'><span style='box-sizing: border-box;'>TO JOIN THE GRAND TALKSHOW, </span><span style='box-sizing: border-box;'>CLICK THE BUTTON BELOW.</span></span></p>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</table>
																	<table class='button_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='padding-bottom: 35px;padding-left: 20px;padding-right: 20px;padding-top: 10px;text-align: center;box-sizing: border-box;'>
																				<div align='center' style='box-sizing: border-box;'>
																					<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://linktr.ee/futurest2022_events' style='height:42px;width:247px;v-text-anchor:middle;' arcsize='15%' stroke='false' fillcolor='#b2d340'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px'><![endif]--><a href='https://linktr.ee/futurest2022_events' target='_blank' style='text-decoration: none;display: inline-block;color: #ffffff;background-color: #b2d340;border-radius: 6px;width: auto;border-top: 1px solid #b2d340;border-right: 1px solid #b2d340;border-bottom: 1px solid #b2d340;border-left: 1px solid #b2d340;padding-top: 5px;padding-bottom: 5px;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align: center;mso-border-alt: none;word-break: keep-all;box-sizing: border-box;'><span style='padding-left: 20px;padding-right: 20px;font-size: 16px;display: inline-block;letter-spacing: normal;box-sizing: border-box;'><span style='font-size: 16px;line-height: 2;word-break: break-word;mso-line-height-alt: 32px;box-sizing: border-box;'>JOIN GRAND TALKSHOW!</span></span></a>
																					<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
																				</div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-5' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #b2d430;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 10px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='social_block' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='text-align: center;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
																				<table class='social-table' width='108px' border='0' cellpadding='0' cellspacing='0' role='presentation' align='center' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																					<tr style='box-sizing: border-box;'>
																						<td style='padding: 0 2px 0 2px;box-sizing: border-box;'><a href='https://www.instagram.com/futurest2022/' target='_blank' style='box-sizing: border-box;'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/instagram@2x.png' width='32' height='32' alt='Instagram' title='Instagram' style='display: block;height: auto;border: 0;box-sizing: border-box;'></a></td>
																						<td style='padding: 0 2px 0 2px;box-sizing: border-box;'><a href='https://www.tiktok.com/@futurest2022' target='_blank' style='box-sizing: border-box;'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/tiktok@2x.png' width='32' height='32' alt='TikTok' title='TikTok' style='display: block;height: auto;border: 0;box-sizing: border-box;'></a></td>
																						<td style='padding: 0 2px 0 2px;box-sizing: border-box;'><a href='https://www.linkedin.com/company/futureenergysummit/mycompany/' target='_blank' style='box-sizing: border-box;'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/linkedin@2x.png' width='32' height='32' alt='LinkedIn' title='LinkedIn' style='display: block;height: auto;border: 0;box-sizing: border-box;'></a></td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #b2d430;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 10px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<table class='text_block' width='100%' border='0' cellpadding='5' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;'>
																		<tr style='box-sizing: border-box;'>
																			<td style='box-sizing: border-box;'>
																				<div style='font-family: sans-serif;box-sizing: border-box;'>
																					<div style='font-size: 14px;mso-line-height-alt: 16.8px;color: #555555;line-height: 1.2;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																						<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: normal;box-sizing: border-box;line-height: inherit;'><span style='font-size: 14px;box-sizing: border-box;'>Tel: </span><span style='font-size: 14px;box-sizing: border-box;'>+628990030279 (Eva)</span></p>
																						<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: normal;box-sizing: border-box;line-height: inherit;'><span style='font-size: 14px;box-sizing: border-box;'>Email: </span><span style='font-size: 14px;box-sizing: border-box;'>futurest2022@gmail.com</span></p>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
									<table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
										<tbody style='box-sizing: border-box;'>
											<tr style='box-sizing: border-box;'>
												<td style='box-sizing: border-box;'>
													<table class='row-content' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
														<tbody style='box-sizing: border-box;'>
															<tr style='box-sizing: border-box;'>
																<td class='column' width='100%' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 5px;padding-bottom: 0px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;'>
																	<div class='spacer_block' style='height: 25px;line-height: 25px;font-size: 1px;box-sizing: border-box;'>&#8202;</div>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table><!-- End -->

				</body>

				</html>";
				$mail->addAddress($email);
				$mail->Send();
			} 
			catch (Exception $e)
			{
				echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
			}
			$mail->smtpClose();
			echo "1";
		}
    }

	public function regisFinalTalkshow()
	{
        $this->load->model("Registrasi");
        $config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/FinalTalkshow/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/FinalTalkshow/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/FinalTalkshow/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors()
		);
        //var_dump($this->input->post());
        if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
        {
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig']))
			{
				$path = './upload/FinalTalkshow/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig']))
			{
				$path = './upload/FinalTalkshow/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory']))
			{
				$path = './upload/FinalTalkshow/sharestory/';
				unlink($path.$data['sharestory']);
			}
			echo json_encode($error);
		}else{
			$this->Registrasi->regisFinalTalkshow($data);
			echo "1";
		}
    }

	public function regisClimateChange()
	{
		//echo var_dump(empty($this->input->post('prioritze')) && empty($this->input->post('willingness')) && empty($this->input->post('committed')));
		$this->load->model("Registrasi");
        $config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/3C/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/3C/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/3C/twibbon';
        $this->load->library('upload', $config, 'twibbon');
		$this->twibbon->initialize($config);
        $foto = $this->twibbon->do_upload('twibbon');

		$config['upload_path']	= './upload/3C/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');
        
        $config = array(
			'allowed_types'	=> 'pdf|jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

		$config['upload_path']	= './upload/3C/CV';
        $this->load->library('upload', $config, 'CV');
		$this->CV->initialize($config);
        $foto = $this->CV->do_upload('CV');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name'),
			'twibbon'			=> $this->twibbon->data('file_name'),
			'CV'				=> $this->CV->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors(),
			'twibbon' 	        => $this->sharestory->display_errors(),
			'CV'				=> $this->CV->display_errors()
		);
        //var_dump($this->input->post());
        if((!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error) || (empty($this->input->post('prioritze')) || empty($this->input->post('willingness')) || empty($this->input->post('committed')))))
        {
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig']))
			{
				$path = './upload/3C/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig']))
			{
				$path = './upload/3C/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory']))
			{
				$path = './upload/3C/sharestory/';
				unlink($path.$data['sharestory']);
			}
			if(empty($error['twibbon']))
			{
				$path = './upload/3C/twibbon/';
				unlink($path.$data['twibbon']);
			}
			if(empty($error['CV']))
			{
				$path = './upload/3C/CV/';
				unlink($path.$data['CV']);
			}
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regis3C($data);
			echo "1";
		}
	}

	public function regisReInnovation()
	{
		$this->load->model("Registrasi");
		//jpg|png|jpeg
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

		$config['upload_path']	= './upload/REinnovation/card';
        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');
		$data['card_1'] = $this->card->data('file_name');
		$error['card_1'] = $this->card->display_errors();
		$this->load->library('upload', $config, 'card2');
		$this->card2->do_upload('card_2');
		$data['card_2'] = $this->card2->data('file_name');
		$error['card_2'] = $this->card2->display_errors();
		if(!empty($_FILES['card_3']['name']))
		{
			$this->load->library('upload', $config, 'card3');
			$this->card3->do_upload('card_3');
			$data['card_3'] = $this->card3->data('file_name');
			$error['card_3'] = $this->card3->display_errors();
		}
			

		$config['upload_path']	= './upload/REinnovation/activestudent';
        $this->load->library('upload', $config, 'activestudent');
		$this->activestudent->initialize($config);
        $this->activestudent->do_upload('activestudent_1');
		$data['activestudent_1'] = $this->activestudent->data('file_name');
		$error['activestudent_1'] = $this->activestudent->display_errors();
		$this->load->library('upload', $config, 'activestudent2');
		$this->activestudent2->do_upload('activestudent_2');
		$data['activestudent_2'] = $this->activestudent2->data('file_name');
		$error['activestudent_2'] = $this->activestudent2->display_errors();
		if(!empty($_FILES['activestudent_3']['name']))
		{
			$this->load->library('upload', $config, 'activestudent3');
			$this->activestudent3->do_upload('activestudent_3');
			$data['activestudent_3'] = $this->activestudent3->data('file_name');
			$error['activestudent_3'] = $this->activestudent3->display_errors();
		}
			

		$config['allowed_types'] = 'jpg|png|jpeg';

		$config['upload_path']	= './upload/REinnovation/follow';
        $this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');
		$data['follow_1'] = $this->follow->data('file_name');
		$error['follow_1'] = $this->follow->display_errors();
		$this->load->library('upload', $config, 'follow2');
		$this->follow2->do_upload('follow_2');
		$data['follow_2'] = $this->follow2->data('file_name');
		$error['follow_2'] = $this->follow2->display_errors();
		if(!empty($_FILES['follow_3']['name']))
		{
			$this->load->library('upload', $config, 'follow3');
			$this->follow3->do_upload('follow_3');
			$data['follow_3'] = $this->follow3->data('file_name');
			$error['follow_3'] = $this->follow3->display_errors();
		}
			
		
		$config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 810,
			'max_height' 	=> 1010
		);
		
		$config['upload_path']	= './upload/REinnovation/photo';
        $this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');
		$data['photo_1'] = $this->photo->data('file_name');
		$error['photo_1'] = $this->photo->display_errors();
		$this->load->library('upload', $config, 'photo2');
		$this->photo2->do_upload('photo_2');
		$data['photo_2'] = $this->photo2->data('file_name');
		$error['photo_2'] = $this->photo2->display_errors();
		if(!empty($_FILES['photo_3']['name']))
		{
			$this->load->library('upload', $config, 'photo3');
			$this->photo3->do_upload('photo_3');
			$data['photo_3'] = $this->photo3->data('file_name');
			$error['photo_3'] = $this->photo3->display_errors();
		}
			
		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/REinnovation/payment'
		);
        /*
		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');
		$data['payment'] = $this->payment->data('file_name');
		$error['payment'] = $this->payment->display_errors();
		*/
		if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
		{
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['photo_1']))
			{
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_1']);
			}
			if(empty($error['photo_2']))
			{
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_2']);
			}
			if(empty($error['photo_3']) && !empty($_FILES['photo_3']['name']))
			{
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_3']);
			}
			if(empty($error['follow_1']))
			{
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_1']);
			}
			if(empty($error['follow_2']))
			{
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_2']);
			}
			if(empty($error['follow_3']) && !empty($_FILES['follow_3']['name'])){
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_3']);
			}
			if(empty($error['activestudent_1']))
			{
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_1']);
			}
			if(empty($error['activestudent_2']))
			{
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_2']);
			}
			if(empty($error['activestudent_3']) && !empty($_FILES['activestudent_3']['name']))
			{
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_3']);
			}
			if(empty($error['card_1']))
			{
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['card_2']))
			{
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_2']);
			}
			if(empty($error['card_3']) && !empty($_FILES['card_3']['name']))
			{
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_3']);
			}
			/*if(empty($error['payment']))
			{
				$path = './upload/REinnovation/payment/';
				unlink($path.$data['payment']);
			}*/
			
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regisReInnovation($data);
			echo "1";
		}
	}

	public function regisEssayCompIndividu()
	{
		$this->load->model("Registrasi");
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/EssayCompetition/card'
		);

        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/follow'
		);

		$this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');
        
        $config = array(
			'allowed_types' => 'jpg|png|jpeg|pdf',
			'upload_path'	=> './upload/EssayCompetition/twibbon'
		);

		$this->load->library('upload', $config, 'twibbon');
		$this->twibbon->initialize($config);
        $this->twibbon->do_upload('twibbon_1');
        
       /* $config = array(
			'allowed_types' => 'pdf',
			'upload_path'	=> './upload/EssayCompetition/activestudent'
		);

		$this->load->library('upload', $config, 'activestudent');
		$this->activestudent->initialize($config);
        $this->activestudent->do_upload('activestudent_1');*/

		/*$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/payment'
		);

		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');*/

		/*$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 810,
			'max_height' 	=> 1010,
			'upload_path'	=> './upload/EssayCompetition/photo'
		);
		
		$this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');*/

		$data = array(
			'card_1' 		    => $this->card->data('file_name'),
			'follow_1' 	        => $this->follow->data('file_name'),
			//'photo_1' 	        => $this->photo->data('file_name'),
			'twibbon_1' 	    => $this->twibbon->data('file_name')
			//'activestudent_1'   => $this->activestudent->data('file_name')
		);

		$error = array(
			'card_1' 		    => $this->card->display_errors(),
			'follow_1'          => $this->follow->display_errors(),
			//'photo_1'           => $this->photo->display_errors(),
			'twibbon_1' 	    => $this->twibbon->display_errors()
			//'activestudent_1'   => $this->activestudent->display_errors()
		);

		if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
		{
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['card_1']))
			{
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['follow_1']))
			{
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_1']);
			}
			/*if(empty($error['photo_1']))
			{
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_1']);
			}*/
			/*if(empty($error['activestudent_1']))
			{
				$path = './upload/EssayCompetition/activestudent/';
				unlink($path.$data['activestudent_1']);
			}*/
			if(empty($error['twibbon_1']))
			{
				$path = './upload/EssayCompetition/twibbon/';
				unlink($path.$data['twibbon_1']);
			}
			/*if(empty($error['payment']))
			{
				$path = './upload/EssayCompetition/payment/';
				unlink($path.$data['payment']);
			}*/
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regisEssayCompetition($data);
			echo "1";
		}
	}
	public function regisEssayCompTeam()
	{
		$this->load->model("Registrasi");
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 1025,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/EssayCompetition/card'
		);

        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');

		$this->load->library('upload', $config, 'card2');
		$this->card2->initialize($config);
        $this->card2->do_upload('card_2');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/follow'
		);

		$this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');

		$this->load->library('upload', $config, 'follow2');
		$this->follow2->initialize($config);
        $this->follow2->do_upload('follow_2');
        
        $config = array(
			'allowed_types' => 'jpg|png|jpeg|pdf',
			'upload_path'	=> './upload/EssayCompetition/twibbon'
		);

		$this->load->library('upload', $config, 'twibbon');
		$this->twibbon->initialize($config);
        $this->twibbon->do_upload('twibbon_1');
        

		$this->load->library('upload', $config, 'twibbon2');
		$this->twibbon2->initialize($config);
        $this->twibbon2->do_upload('twibbon_2');
        
        /*$config = array(
			'allowed_types' => 'pdf',
			'upload_path'	=> './upload/EssayCompetition/activestudent'
		);
		
		$this->load->library('upload', $config, 'activestudent');
		$this->activestudent->initialize($config);
        $this->activestudent->do_upload('activestudent_1');

		$this->load->library('upload', $config, 'activestudent2');
		$this->activestudent2->initialize($config);
        $this->activestudent2->do_upload('activestudent_2');*/

		/*$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/payment'
		);

		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');*/

		/*$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'	 	=> 1025,
			'max_width' 	=> 410,
			'max_height' 	=> 610,
			'upload_path'	=> './upload/EssayCompetition/photo'
		);
		
		$this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');

		$this->load->library('upload', $config, 'photo2');
		$this->photo2->initialize($config);
        $this->photo2->do_upload('photo_2');*/

		$data = array(
			'card_1' 		    => $this->card->data('file_name'),
			'follow_1' 	        => $this->follow->data('file_name'),
			//'photo_1' 	        => $this->photo->data('file_name'),
			//'activestudent_1'   => $this->activestudent->data('file_name'),
			'twibbon_1' 	    => $this->twibbon->data('file_name'),
			'card_2' 		    => $this->card2->data('file_name'),
			'follow_2' 	        => $this->follow2->data('file_name'),
			//'photo_2' 	        => $this->photo2->data('file_name'),
			'twibbon_2' 	    => $this->twibbon2->data('file_name')
			//'activestudent_2'   => $this->activestudent2->data('file_name')
		);

		$error = array(
			'card_1' 		    => $this->card->display_errors(),
			'follow_1'          => $this->follow->display_errors(),
			//'photo_1'           => $this->photo->display_errors(),
			//'activestudent_1'   => $this->activestudent->display_errors(),
			'twibbon_1'         => $this->twibbon->display_errors(),
			'card_2' 		    => $this->card2->display_errors(),
			'follow_2'          => $this->follow2->display_errors(),
			//'photo_2'           => $this->photo2->display_errors(),
			'twibbon_2'         => $this->twibbon2->display_errors()
			//'activestudent_2'   => $this->activestudent2->display_errors()
		);

		if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error))
		{
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['card_1']))
			{
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['follow_1']))
			{
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_1']);
			}
			/*if(empty($error['photo_1']))
			{
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_1']);
			}
			if(empty($error['activestudent_1']))
			{
				$path = './upload/EssayCompetition/activestudent/';
				unlink($path.$data['activestudent_1']);
			}*/
			if(empty($error['twibbon_1']))
			{
				$path = './upload/EssayCompetition/twibbon/';
				unlink($path.$data['twibbon_1']);
			}
			if(empty($error['card_2']))
			{
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_2']);
			}
			if(empty($error['follow_2']))
			{
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_2']);
			}
			/*if(empty($error['photo_2']))
			{
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_2']);
			}
			if(empty($error['activestudent_2']))
			{
				$path = './upload/EssayCompetition/activestudent/';
				unlink($path.$data['activestudent_2']);
			}*/
			if(empty($error['twibbon_2']))
			{
				$path = './upload/EssayCompetition/twibbon/';
				unlink($path.$data['twibbon_2']);
			}
			/*if(empty($error['payment']))
			{
				$path = './upload/EssayCompetition/payment/';
				unlink($path.$data['payment']);
			}*/
			echo json_encode($error);
		}
		else
		{
			$this->Registrasi->regisEssayCompetitionteam($data);
			echo "1";
		}
	}
	
	function min_100_words($text)
	{
        $array_words = explode(" ", $text);

        if(sizeof($array_words) >= 100)
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('min_100_words', 'Please fill in the motivation column with at least 100 words ');
            return FALSE;
        }
    }
}