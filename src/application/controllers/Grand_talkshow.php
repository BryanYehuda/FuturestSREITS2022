<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class Grand_talkshow extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestGrandTalkshow'))
		{
			redirect('home');
		}
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$query = $this->Dashboard->getData($tableName);
		$data = [
			'data' => count($query)
		];
		$this->load->view('admin/dashboard_grand_talkshow/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getData($tableName)
		];
		$this->load->view('admin/dashboard_grand_talkshow/list', $data);
	}

	public function notifyAll()
	{
		$this->load->model("Dashboard");
		$tableName = $this->session->userdata('account_table');
		$result = $this->Dashboard->getData($tableName);
		foreach($result as $item)
		{
			$name = $item['pendaftarangrandtalkshow_name'];
			$email = $item['pendaftarangrandtalkshow_email'];
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
				$mail->Subject = "Grand Talkshow: The Urgency of Mitigating Climate Change";
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
																						<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'></p>
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
		}
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengirimkan email notifikasi!</div>');
		redirect("dashboard-grand-talkshow");
	}
}
?>