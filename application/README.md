## Ini adalah dokumentasi belajar saya menggunakan CodeIgniter

#### View Control
Ada beberapa folder dan file yang harus diperhatikan
`config/routes.php`
`controllers/News.php`
`views/`

- Pertama edit file `config/routes.php`
  `$route['news'] = 'news';` maka url akan memanggil `localhost/belajar/index.php/news`
  ini akan memanggil file `controllers/News.php` huruf awalnya besar, namun saat dipanggil menjadi kecil semua

- Kedua tambah file `controllers/News.php` kemudian isikan seperti ini
  ```shell
  public function index()
	{
    $this->load->view('news/index');
	}
  ```
  ini menandakan method index akan memanggil file `views/news/index.php`

- Ketiga
  Silahkan buat folder dan file `news` dan file `index.php` didalam folder tersebut, kemudian ketik apa saja,
  jika sudah silahkan buka `localhost/belajar/index.php/news`

#### Halaman Statis yang dapat berubah sesuai req url-nya
Ada beberapa folder dan file yang harus diperhatikan
`config/routes.php`
`controllers/News.php`
`views/`

- Pertama silahkan buka file `config/routes.php` , kemudian tambah ini
  `$route['(:any)'] = 'news/$1';` , `(:any)` ini digunakan untuk memanggil apa saja yang user ketik

- Kedua
  Silahkan edit file `controllers/News.php` dan tambahkan didalam method `index()` menjadi seperti ini
  ```shell
  public function index($halaman = 'index') {
    $this->load->view($halaman);
  }
  ```
  kemudian setelah selesai bikinlah beberapa file didalam folder `views/`  ,`file1.php`,`file2.php`
  jika sudah pada saat kita membuka url `localhost/belajar/index.php/news` seperti ini maka yang akan di load adalah file `index.php` , tetapi jika `localhost/belajar/index.php/news/file1` maka yang akan diload adalah `file1.php` , begitulah seterusnya, jika file tidak ada maka akan memberikan hasil error

#### Membuat Model dan Menampilkan data dari database
Ada beberapa folder dan file yang harus diperhatikan
`config/database.php`
`models/`
`controllers/`
`views/`
