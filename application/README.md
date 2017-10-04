## Ini adalah dokumentasi belajar saya menggunakan CodeIgniter

#### MVC
Ada beberapa folder yang harus diperhatikan
`config/routes.php`
`controllers/News.php`
`views/fileview.php`

- Pertama edit file `config/routes.php`
  `$route['news'] = 'news';` maka url akan memanggil `localhost/index.php/news`
  ini akan memanggil file `controllers/News.php` huruf awalnya besar, namun saat dipanggil menjadi kecil semua

- Kedua tambah file `controllers/News.php` kemudian isikan seperti ini
  ```shell
  public function index()
	{
    $this->load->view('news/index');
	}
  ```
  ini menandakan method index akan memanggil file `views/news/index.php`
  jika sudah silahkan buka `localhost/index.php/news`
