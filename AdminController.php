<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('adminviews/login');
    }

    //after login submit
    public function adminlloginsubmit()
    {
        // get email and password from login form
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $adminmodel = new AdminModel();
        $data = $adminmodel->where('email', $email)->first();

        if ($data) {
            echo "user found";
            if ($data['password'] == $password) {

                return view('adminviews/admindashboard', $data);
            } else {
                echo "password incorrect";
            }
        } else {
            echo "user not found";
        }
    }



    public function dash(): string
    {
        return view('adminviews/admindashboard');
    }


    public function register()
    {
        return view('adminviews/register');
    }
    public function store()
    {
        // form validation rules

        $rules = [
            'name' =>  'required|min_length[2]|max_length[50]',
            'phone' =>  'required|min_length[2]|max_length[10]',
            'email' =>  'required|min_length[2]|max_length[50]|valid_email|is_unique[admin:email]',
            'password' =>  'required|min_length[2]|max_length[50]',
            'confirmpassword' =>  'matches[password]'
        ];

        //check for validations
        if ($this->validate($rules)) {
            echo "All set";

            //collect the form data;
            $data = [
                "name" => $this->request->getVar('name'),
                "phone" => $this->request->getVar('phone'),
                "email" => $this->request->getVar('email'),
                "password" => $this->request->getVar('password'),
            ];

            $adminmodel = new AdminModel();
            $adminmodel->save($data);
            echo "Data inserted in DB";
        } else {
            $data['validation'] = $this->validator;

            return view('adminviews/register', $data);
        }
    }
}
