<?php
class Matakuliah extends CI_controller
{

    public function index()

    {

        $this->load->view("view-form-matakuliah");
    }

    public function cetak()
        $this-->form_validation->set_rules('kode', 'Kode Matakuliah',
'required|min_lenght[3]', [
                'required' => 'Kode Matakuliah harus diisi',
                'min_lenght' => 'Kode terlalu Pendek'
        ]);

        $this-->form_validation-->set_rules('Nama matakuliah',
'required|min_length')
        ]);

        if ($this-->form_validation-->run() != true) {
            $this-->load-->view('view-form-matakuliah');
           else
            $data =
                 'kode' => $this->input->post('kode'),
                 'nama' => $this->input->post('nama'),
                 'sks' => $this->input->post('sks')
            ];

            $this->load->view('view-data-matakuliah', $data);
        }
    }
}