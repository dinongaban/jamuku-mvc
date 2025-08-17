<?php
class HomeController extends controller {
    public function index() {
        $bahanModel = $this->model('Bahan');
        $bahan = $bahanModel->getAll();

        $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : [];

        $this->view('home/index', [
            'bahan' => $bahan,
            'keranjang' => $keranjang
        ]);
    }

    public function tambahKeranjang() {
        $id = $_POST['bahan_id'];
        $porsi = $_POST['porsi'];

        $bahanModel = $this->model('Bahan');
        $bahan = $bahanModel->getById($id);

        if ($bahan) {
            $_SESSION['keranjang'][] = [
                'id' => $bahan['id'],
                'nama' => $bahan['nama'],
                'harga' => $bahan['harga'],
                'porsi' => $porsi,
                'total' => $bahan['harga'] * $porsi
            ];
        }
        header("Location: ?route=home/index");
    }

    public function hapusKeranjang($index) {
        if (isset($_SESSION['keranjang'][$index])) {
            unset($_SESSION['keranjang'][$index]);
            $_SESSION['keranjang'] = array_values($_SESSION['keranjang']);
        }
        header("Location: ?route=home/index");
    }
}
