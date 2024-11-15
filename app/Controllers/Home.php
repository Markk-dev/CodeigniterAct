<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function homepage()
    {
        return view('InputData');
    }

    public function displayName()
    {
        
        $validate = \Config\Services::validation();
        
        $validate->setRules([
            'studID' => 'required|alpha_numeric|max_length[10]',
            'fname' => 'required|alpha_space|max_length[50]',
            'lname' => 'required|alpha_space|max_length[50]',
            'address' => 'required|string|max_length[100]',
            'birthday' => 'required|valid_date[Y-m-d]',
            'gender' => 'required|in_list[Male,Female,Prefer not to say]',
            'mobile' => 'required|numeric|max_length[15]',
            'email' => 'required|valid_email',
            'status' => 'required|in_list[Single,Married,Widowed,Separated]'
        ]);

        
        if (!$this->validate($validate->getRules())) {
            
            return redirect()->to('/homepage')->withInput()->with('errors', $validate->getErrors());
        }

        return view('DisplayData', [
            'studID' => $this->request->getGet('studID'),
            'fname' => $this->request->getGet('fname'),
            'lname' => $this->request->getGet('lname'),
            'address' => $this->request->getGet('address'),
            'birthday' => $this->request->getGet('birthday'),
            'gender' => $this->request->getGet('gender'),
            'mobile' => $this->request->getGet('mobile'),
            'email' => $this->request->getGet('email'),
            'status' => $this->request->getGet('status')
        ]);
    }
}
