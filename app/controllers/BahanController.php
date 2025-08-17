<?php
class BahanController extends Controller {
    public function index() {
        $bahanModel = $this->model("Bahan");
        $data['bahan'] = $bahanModel->getAll();

        $this->view('templates/header');
        $this->view('bahan/index', $data);
        $this->view('templates/footer');
    }
}
