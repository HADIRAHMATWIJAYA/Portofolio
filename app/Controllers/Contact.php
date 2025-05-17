<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('contact');
    }

    public function submit()
    {
        $model = new ContactModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
        ];

        $model->insert($data);

        return redirect()->to('/contact')->with('success', 'Pesan berhasil dikirim!');
    }

    public function list()
    {
        $model = new ContactModel();
        $data['contacts'] = $model->findAll();

        return view('contact_list', $data);
    }
}
