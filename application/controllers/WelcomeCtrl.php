<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeCtrl extends CI_Controller {

	//VIEW INDEX PAGE
	public function index()
	{
		//$this->load->view('header');
		$this->load->view('index');
		//$this->load->view('footer');
	}

	//VIEW  PAGE
	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}


	//VIEW JOBS DETAILS PAGE
	public function jobsdetails()
	{
		$this->load->view('header');
		$this->load->view('jobsdetails');
		$this->load->view('footer');
	}

		//VIEW EMPLOYEE USER PAGE
		public function employeeusers()
		{
			$this->load->view('header');
			$this->load->view('employeeusers');
			$this->load->view('footer');
		}

		
		//VIEW EMPLOYER USER PAGE
		public function employerusers()
		{
			$this->load->view('header');
			$this->load->view('employerusers');
			$this->load->view('footer');
		}

				
		//VIEW EMPLOYER USER PAGE
		public function companydetails()
		{
			$this->load->view('header');
			$this->load->view('companydetails');
			$this->load->view('footer');
		}

					
		//VIEW PAYMENT ORDER PAGE
		public function paymentorders()
		{
			$this->load->view('header');
			$this->load->view('paymentorders');
			$this->load->view('footer');
		}

			//VIEW ADVERTISEMENT PAGE
			public function advertisement()
			{
				$this->load->view('header');
				$this->load->view('advertisement');
				$this->load->view('footer');
			}

			//add advertisement PAGE
			public function addadvertisement()
			{
				$this->load->view('header');
				$this->load->view('addadvertisement');
				$this->load->view('footer');
			}

				//Edit advertisement PAGE
				public function editadvertisement()
				{
					$this->load->view('header');
					$this->load->view('editadvertisement');
					$this->load->view('footer');
				}
	


			//VIEW PROFILE PAGE
			public function profile()
			{
				$this->load->view('header');
				$this->load->view('profile');
				$this->load->view('footer');
			}

			//EDIT  PROFILE PAGE
			public function editprofile()
			{
				$this->load->view('header');
				$this->load->view('editprofile');
				$this->load->view('footer');
			}


}
