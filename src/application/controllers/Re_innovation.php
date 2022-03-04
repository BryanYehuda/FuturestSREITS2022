<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class Re_innovation extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestREInnovation'))
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
		$this->load->view('admin/dashboard_re_innovation/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => array_merge($this->Dashboard->getDataREIWhere(2), $this->Dashboard->getDataREIWhere(1))
		];
		$this->load->view('admin/dashboard_re_innovation/list', $data);
	}

    public function confirmation()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(0)
		];
		$this->load->view('admin/dashboard_re_innovation/confirmation', $data);
    }

	public function abstract()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(1)
		];
		$this->load->view("admin/dashboard_re_innovation/abtractlist", $data);
    }

	public function fullpaper()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(2)
		];
		$this->load->view("admin/dashboard_re_innovation/fullpaperlist", $data);
    }

	public function ppt()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(2)
		];
		$this->load->view("admin/dashboard_re_innovation/pptlist", $data);
    }

	public function confirm($id)
	{
		$this->load->model("Dashboard");
		$data = [
			'id' => $id,
			'status' => 1
		];
		$result = $this->Dashboard->confirmStsREI($data);
		$teamname = $result['teamname'];
		$username = $result['username'];
		$password = $result['password'];
		$email = $result['email'];
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
			$mail->Subject = "[Confirmation] RE Innovation Brainstorm Competition Account";
			$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
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
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 01px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 20px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><span style='box-sizing: border-box;'><span style='box-sizing: border-box;'>Greetings, Team $teamname!</span></span></strong></span><br style='box-sizing: border-box;'></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>We would like to confirm that your team has been registered as a participant of Renewable Energy Innovation Brainstorm Futurest 2022. In addition, we would like to express our gratitude to you for participating in our competition.<span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'>Account Credential<br style='box-sizing: border-box;'></strong>Username: $username</span><br style='box-sizing: border-box;'>Password: $password</span></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>For all informations regarding our competition, please wait our next email or visit our website at <a href='https://futurest-its.com/re-innovation' target='_blank'>futurest-its.com/re-innovation.</a><span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>Renewable Energy Innovation Brainstorm - Futurest 2022<span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
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
																					<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: normal;box-sizing: border-box;line-height: inherit;'><span style='font-size: 14px;box-sizing: border-box;'><a href='https://futurest-its.com/contact' target='_blank'>RE Innovation Contact Person</a></span></p>
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
			$mail->IsHTML(TRUE);
			$mail->addAddress($email);
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();		
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengkonfirmasi peserta!</div>');
		redirect('dashboard-re-innovation-confirmation');
	}

	public function reject($id)
	{
		$this->load->model("Dashboard");
		$data = $this->Dashboard->getDataREIId($id);
		$teamname = $data['pendaftaranreinnovation_teamname'];

        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_1_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_1_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_1_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_1_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_1_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_1_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_1_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_1_activestudent']);
        }
        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_2_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_2_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_2_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_2_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_2_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_2_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_2_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_2_activestudent']);
        }
        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_3_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_3_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_3_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_3_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_3_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_3_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_3_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_3_activestudent']);
        }
        /*if(file_exists('./upload/EssayCompetition/payment/' . $data['pendaftaranreinnovation_payment'])){
            unlink('./upload/EssayCompetition/payment/' . $data['pendaftaranreinnovation_payment']);
        }*/
		$this->Dashboard->deleteDataREIId($id);
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
			$mail->Subject = "[Rejection] RE Innovation Brainstorm Competition";
			$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
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
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 01px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 20px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><span style='box-sizing: border-box;'><span style='box-sizing: border-box;'>We are sorry, Team $teamname</span></span></strong></span><br style='box-sizing: border-box;'></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>We would like to inform you that due to the lack of required documents, your team <strong>has been rejected</strong>  by our system to be registered as the participants of Renewable Energy Innovation Brainstorm Futurest 2022. Please contact us if you think that this was a mistake or we would like to recommend you to  re-register your team. Thank you!<span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>For all informations regarding our competition, contact us via our email or our administrative contact person below:</a><span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																					<p style='margin: 5px;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>Chindy <br>
																						Line: chindy_rosita <br>
																						WA: <a href='https://wa.me/6285215371119' target ='_blank'>+6285215371119</a>
																					</a><span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																					<p style='margin: 5px;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>Chindy
																						Khoirul <br>
																						Line: m.khoirulm <br>
																						WA: <a href='https://wa.me/6288228249694' target ='_blank'>+6288228249694</a>
																					</a><span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
																				</div>
																			</div>
																		</td>
																	</tr>
																</table>
																<table class='image_block' width='100%' border='0' cellpadding='20' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;'>
																	<tr style='box-sizing: border-box;'>
																		<td style='box-sizing: border-box;'>
																			<div style='font-family: sans-serif;box-sizing: border-box;'>
																				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #555555;line-height: 1.5;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;box-sizing: border-box;'>
																					<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 21px;letter-spacing: 1px;box-sizing: border-box;line-height: inherit;'>Renewable Energy Innovation Brainstorm - Futurest 2022<span style='color: #a8bf6f;font-size: 14px;box-sizing: border-box;'><strong style='box-sizing: border-box;'><br style='box-sizing: border-box;'></strong></span></p>
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
																					<p style='margin: 0;font-size: 14px;text-align: center;letter-spacing: normal;box-sizing: border-box;line-height: inherit;'><span style='font-size: 14px;box-sizing: border-box;'><a href='https://futurest-its.com/contact' target='_blank'>RE Innovation Contact Person</a></span></p>
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
			$mail->IsHTML(TRUE);
			$mail->addAddress($data['pendaftaranreinnovation_1_email']);
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();		
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mereject peserta!</div>');
		redirect('dashboard-re-innovation-confirmation');
	}

	public function payment()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => array_merge($this->Dashboard->getDataREIWhere(1), $this->Dashboard->getDataREIWhere(2))
		];
		$this->load->view('admin/dashboard_re_innovation/payment', $data);
    }
	
	public function confirmpay($id)
	{
		$this->load->model("Dashboard");
		$this->Dashboard->confirmREIpay($id);
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengubah status pembayaran peserta!</div>');
		redirect('dashboard-re-innovation-payment');
	}

	public function cancelpay($id)
	{
		$this->load->model("Dashboard");
		$this->Dashboard->cancelREIpay($id);
		$this->session->set_flashdata('response', '<div class="alert alert-danger" role="alert">Berhasil membatalkan status pembayaran peserta!</div>');
		redirect('dashboard-re-innovation-payment');
	}

	public function notifyAll()
	{
		$array = file(base_url('public/Reib_email.txt'));
		foreach($array as $email)
		{
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
				$mail->Subject = "RE Innovation Brainstorm Competition";
				$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
				$mail->IsHTML(TRUE);
				$mail->Body = "<!DOCTYPE html>

				<html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml' style='box-sizing: border-box;'>
				<head style='box-sizing: border-box;'>
				<title style='box-sizing: border-box;'></title>
				<meta content='text/html; charset=utf-8' http-equiv='Content-Type' style='box-sizing: border-box;'>
				<meta content='width=device-width, initial-scale=1.0' name='viewport' style='box-sizing: border-box;'>
				<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
				<!--[if !mso]><!-->
				
				
				
				
				<!--<![endif]-->
				
				</head>
				<body style='background-color: #e8ffd0;margin: 0;padding: 0;-webkit-text-size-adjust: none;text-size-adjust: none;box-sizing: border-box;'>
				<table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #e8ffd0;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #1e794e;background-image: url(https://futurest-its.com//public/img/reib/ed7861e4-bc44-401c-8123-a8fff0f3175a.png);background-repeat: no-repeat;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 15px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='100%'>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-left: 45px;padding-right: 45px;padding-top: 45px;text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;font-size: 44px;font-weight: 700;letter-spacing: 2px;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>Renewable Energy Innovation Brainstorm</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 60px;text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #b2d430;direction: ltr;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;font-size: 31px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'>FUTUREST 2022</h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 26px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>FUTUREST'S FIRST NATIONAL INNOVATION PAPER COMPETITION</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 14.399999999999999px;box-sizing: border-box;line-height: inherit;'><br></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='10' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 18px;color: #ffffff;line-height: 1.5;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 24px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 16px;box-sizing: border-box;'>Greetings FutureX!</span></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 24px;box-sizing: border-box;line-height: inherit;'><br style='box-sizing: border-box;'><span style='font-size: 16px;box-sizing: border-box;'>We are so delighted to announce that <strong style='box-sizing: border-box;'>Renewable Energy Innovation Brainstorm</strong> are open for your team to join! This national scaled paper competition is coming with amazing big-theme, </span></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 18px;box-sizing: border-box;line-height: inherit;'><br></p>
				<p style='margin: 0;font-size: 16px;text-align: center;mso-line-height-alt: 24px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 16px;box-sizing: border-box;'><strong style='box-sizing: border-box;'>Energy Optimization through Technological Innovation in the New Renewable Energy Sector to Achieve Net-Zero Emissions.</strong> </span></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 18px;box-sizing: border-box;line-height: inherit;'><br></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 24px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 16px;box-sizing: border-box;'>Interesting, isn't it?</span></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 18px;box-sizing: border-box;line-height: inherit;'><br></p>
				<p style='margin: 0;font-size: 16px;mso-line-height-alt: 24px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 16px;box-sizing: border-box;'>Maximize your potential on this event with several benefits:</span></p>
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #1e794e;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='50%'>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 10px;padding-right: 10px;padding-top: 15px;width: 100%;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img alt='Dolphin in the ocean' class='fullMobileWidth big' src=https://futurest-its.com//public/img/reib/951d6736-4383-4698-8ceb-eaffe5413eb5.jpg style='display: block;height: auto;border: 0;width: 280px;max-width: 100%;box-sizing: border-box;' title='Dolphin in the ocean' width='280'></div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 18px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>FREE paper-writing workshop</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 25px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;box-sizing: border-box;line-height: inherit;'>Learn how to write the best paper from the best trainer for every teams that proceed to Full Paper Stage</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				<td class='column column-2' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='50%'>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 10px;padding-right: 10px;padding-top: 15px;width: 100%;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img alt='Windmills' class='fullMobileWidth big' src='https://futurest-its.com//public/img/reib/6c1dfb10-9d5e-4e23-9aab-38e6cd184a47.jpg' style='display: block;height: auto;border: 0;width: 300px;max-width: 100%;box-sizing: border-box;' title='Windmills' width='300'></div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 18px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>Mentoring program for finalists</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 25px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;box-sizing: border-box;line-height: inherit;'>With amazing experts from various energy companies and institutions, including General Electric, IESR, and RDI</p>
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #1e794e;background-image: url(https://futurest-its.com//public/img/reib/pngwing.com_3.png);background-position: top center;background-repeat: no-repeat;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 0px;padding-bottom: 15px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='100%'>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 14.399999999999999px;box-sizing: border-box;line-height: inherit;'><br></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img alt='Garbage' src='https://futurest-its.com//public/img/reib/pngwing.com_4.png' style='display: block;height: auto;border: 0;width: 210px;max-width: 100%;box-sizing: border-box;' title='Garbage' width='210'></div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 18px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>Total prize for more than Rp10.000.000</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 14.399999999999999px;box-sizing: border-box;line-height: inherit;'><br></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-left: 20px;padding-right: 20px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: center;mso-line-height-alt: 14.399999999999999px;box-sizing: border-box;line-height: inherit;'><br></p>
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #1e794e;background-image: url(https://futurest-its.com//public/img/reib/tirbine.png);background-position: top center;background-repeat: no-repeat;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 5px;padding-bottom: 50px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='100%'>
				<table border='0' cellpadding='0' cellspacing='0' class='button_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-top: 10px;text-align: center;box-sizing: border-box;'>
				<div align='center' style='box-sizing: border-box;'>
				<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://lynk.id/reib.futurest' style='height:46px;width:207px;v-text-anchor:middle;' arcsize='87%' strokeweight='1.5pt' strokecolor='#064664' fillcolor='#ffffff'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#064664; font-family:'Trebuchet MS', Tahoma, sans-serif; font-size:16px'><![endif]--><a href='https://lynk.id/reib.futurest' style='text-decoration: none;display: inline-block;color: #064664;background-color: #ffffff;border-radius: 40px;width: auto;border-top: 2px solid #064664;border-right: 2px solid #064664;border-bottom: 2px solid #064664;border-left: 2px solid #064664;padding-top: 5px;padding-bottom: 5px;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align: center;mso-border-alt: none;word-break: keep-all;box-sizing: border-box;' target='_blank'><span style='padding-left: 40px;padding-right: 40px;font-size: 16px;display: inline-block;letter-spacing: normal;box-sizing: border-box;'><span style='font-size: 16px;line-height: 2;word-break: break-word;mso-line-height-alt: 32px;box-sizing: border-box;'><strong style='box-sizing: border-box;'>MORE DETAILS</strong></span></span></a>
				<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='width: 100%;padding-right: 0px;padding-left: 0px;padding-top: 20px;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img class='big' src='https://futurest-its.com//public/img/reib/Poster_REIB_Story_2.png' style='display: block;height: auto;border: 0;width: 600px;max-width: 100%;box-sizing: border-box;' width='600'></div>
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-5' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #b2d430;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='41.666666666666664%'>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img class='fullMobileWidth big' src='https://futurest-its.com//public/img/reib/Guidebook.png' style='display: block;height: auto;border: 0;width: 250px;max-width: 100%;box-sizing: border-box;' width='250'></div>
				</td>
				</tr>
				</table>
				</td>
				<td class='column column-2' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-left: 15px;padding-right: 15px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='58.333333333333336%'>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;padding-top: 70px;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #064664;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 40px;font-weight: 400;letter-spacing: -1px;line-height: 120%;text-align: left;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>FIND OUT MORE!</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #064664;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;box-sizing: border-box;line-height: inherit;'><span style='font-size: 20px;box-sizing: border-box;'>To make sure that you are fully understand about this competition, <strong style='box-sizing: border-box;'>access the guidebook at</strong>:</span></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='button_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-top: 10px;text-align: left;padding-bottom: 60px;box-sizing: border-box;'>
				<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://bit.ly/GuidebookREIB2022' style='height:46px;width:186px;v-text-anchor:middle;' arcsize='87%' strokeweight='1.5pt' strokecolor='#064664' fillcolor='#ffffff'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#064664; font-family:'Trebuchet MS', Tahoma, sans-serif; font-size:16px'><![endif]--><a href='https://bit.ly/GuidebookREIB2022' style='text-decoration: none;display: inline-block;color: #064664;background-color: #ffffff;border-radius: 40px;width: auto;border-top: 2px solid #064664;border-right: 2px solid #064664;border-bottom: 2px solid #064664;border-left: 2px solid #064664;padding-top: 5px;padding-bottom: 5px;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align: center;mso-border-alt: none;word-break: keep-all;box-sizing: border-box;' target='_blank'><span style='padding-left: 40px;padding-right: 40px;font-size: 16px;display: inline-block;letter-spacing: normal;box-sizing: border-box;'><span style='font-size: 16px;line-height: 2;word-break: break-word;mso-line-height-alt: 32px;box-sizing: border-box;'><strong style='box-sizing: border-box;'>GUIDEBOOK</strong></span></span></a>
				<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-6' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #1e794e;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-left: 15px;padding-right: 15px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='58.333333333333336%'>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='text-align: center;width: 100%;padding-top: 70px;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #ffffff;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 40px;font-weight: 400;letter-spacing: -1px;line-height: 120%;text-align: right;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>JOIN US NOW!</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 10px;padding-top: 10px;box-sizing: border-box;'>
				<div style='font-family: sans-serif;box-sizing: border-box;'>
				<div style='font-size: 12px;mso-line-height-alt: 14.399999999999999px;color: #ffffff;line-height: 1.2;font-family: Nunito, Arial, Helvetica Neue, Helvetica, sans-serif;box-sizing: border-box;'>
				<p style='margin: 0;font-size: 14px;text-align: right;box-sizing: border-box;line-height: inherit;'><span style='font-size: 20px;box-sizing: border-box;'>Submission are<strong style='box-sizing: border-box;'> FREE</strong> and open for you <strong style='box-sizing: border-box;'>until March 13th, 2022</strong>, so make sure you don't miss it! <strong style='box-sizing: border-box;'>Register yourself and submit your abstract through</strong>:</span></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='button_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 30px;padding-left: 10px;padding-right: 10px;padding-top: 10px;text-align: right;box-sizing: border-box;'>
				<div align='right' style='box-sizing: border-box;'>
				<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://futurest-its.com/re-innovation' style='height:46px;width:169px;v-text-anchor:middle;' arcsize='87%' strokeweight='1.5pt' strokecolor='#064664' fillcolor='#b2d430'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#064664; font-family:'Trebuchet MS', Tahoma, sans-serif; font-size:16px'><![endif]--><a href='https://futurest-its.com/re-innovation' style='text-decoration: none;display: inline-block;color: #064664;background-color: #b2d430;border-radius: 40px;width: auto;border-top: 2px solid #064664;border-right: 2px solid #064664;border-bottom: 2px solid #064664;border-left: 2px solid #064664;padding-top: 5px;padding-bottom: 5px;font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align: center;mso-border-alt: none;word-break: keep-all;box-sizing: border-box;' target='_blank'><span style='padding-left: 40px;padding-right: 40px;font-size: 16px;display: inline-block;letter-spacing: normal;box-sizing: border-box;'><span style='font-size: 16px;line-height: 2;word-break: break-word;mso-line-height-alt: 32px;box-sizing: border-box;'><strong style='box-sizing: border-box;'>REGISTER</strong></span></span></a>
				<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
				</div>
				</td>
				</tr>
				</table>
				</td>
				<td class='column column-2' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='41.666666666666664%'>
				<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='width: 100%;padding-right: 0px;padding-left: 0px;box-sizing: border-box;'>
				<div align='center' style='line-height: 10px;box-sizing: border-box;'><img class='fullMobileWidth big' src='https://futurest-its.com//public/img/reib/REIB_2022_Guidebook_Page_19.png' style='display: block;height: auto;border: 0;width: 250px;max-width: 100%;box-sizing: border-box;' width='250'></div>
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
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-7' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #064664;box-sizing: border-box;' width='100%'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #000000;width: 600px;box-sizing: border-box;' width='600'>
				<tbody style='box-sizing: border-box;'>
				<tr style='box-sizing: border-box;'>
				<td class='column column-1' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;vertical-align: top;padding-top: 30px;padding-bottom: 30px;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;box-sizing: border-box;' width='100%'>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-left: 15px;padding-right: 15px;text-align: center;width: 100%;box-sizing: border-box;'>
				<h2 style='margin: 0;color: #96ed4c;direction: ltr;font-family: Arial, Helvetica Neue, Helvetica, sans-serif;font-size: 18px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: left;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'>Connect with us for more information!<br style='box-sizing: border-box;'>Instagram: @futurest2022<br style='box-sizing: border-box;'>Tiktok: @futurest2022<br style='box-sizing: border-box;'>LinkedIn: Future Energy Summit<br style='box-sizing: border-box;'>Email: futurest2022@gmail.com</h2>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='10' cellspacing='0' class='social_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='box-sizing: border-box;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' class='social-table' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='138px'>
				<tr style='box-sizing: border-box;'>
				<td style='padding: 0 7px 0 7px;box-sizing: border-box;'><a href='https://www.linkedin.com/company/futureenergysummit/' target='_blank' style='box-sizing: border-box;'><img alt='Linkedin' height='32' src='https://futurest-its.com//public/img/reib/linkedin2x.png' style='display: block;height: auto;border: 0;box-sizing: border-box;' title='linkedin' width='32'></a></td>
				<td style='padding: 0 7px 0 7px;box-sizing: border-box;'><a href='https://www.instagram.com/futurest2022/' target='_blank' style='box-sizing: border-box;'><img alt='Instagram' height='32' src='https://futurest-its.com//public/img/reib/instagram2x.png' style='display: block;height: auto;border: 0;box-sizing: border-box;' title='instagram' width='32'></a></td>
				<td style='padding: 0 7px 0 7px;box-sizing: border-box;'><a href='https://www.tiktok.com/@futurest2022' target='_blank' style='box-sizing: border-box;'><img alt='TikTok' height='32' src='https://futurest-its.com//public/img/reib/tiktok2x.png' style='display: block;height: auto;border: 0;box-sizing: border-box;' title='TikTok' width='32'></a></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='heading_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-left: 20px;padding-right: 20px;padding-top: 5px;text-align: center;width: 100%;box-sizing: border-box;'>
				<h1 style='margin: 0;color: #96ed4c;direction: ltr;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 24px;font-weight: 400;letter-spacing: normal;line-height: 120%;text-align: center;margin-top: 0;margin-bottom: 0;box-sizing: border-box;'><strong style='box-sizing: border-box;'>#EmpowerTheFuture #Futurest2022 #SREITS2122</strong></h1>
				</td>
				</tr>
				</table>
				<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='100%'>
				<tr style='box-sizing: border-box;'>
				<td style='padding-bottom: 25px;padding-left: 10px;padding-right: 10px;padding-top: 25px;box-sizing: border-box;'>
				<div align='center' style='box-sizing: border-box;'>
				<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt;mso-table-rspace: 0pt;box-sizing: border-box;' width='95%'>
				<tr style='box-sizing: border-box;'>
				<td class='divider_inner' style='font-size: 1px;line-height: 1px;border-top: 1px solid #96ED4C;box-sizing: border-box;'><span style='box-sizing: border-box;'> </span></td>
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
	}
}
?>