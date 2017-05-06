# codeigniter-breadcrumb

Merhaba 
Codeigniter Breadcrumb Kütüphanesini Nasıl Kullanmalısınız ?

Projenizin libraries klasörüne Breadcrumb.php dosyasını ekleyin.
Config/autoload.php içersinde $autoload['libraries'] = 'Breadcrumb' şeklinde yada Controller dosyanızın __construct() methodunda $this->load->library('Breadcrumb'); şeklinde çağırabilirsiniz.

Breadcrumb ekleme $this->bc->addCrumb('Başlık','Link');
		              $this->bc->addCrumb('Başlık','Link');
                  
Breadcrumb render etmek için view dosyanızda <?php echo $this->bc->makeBread();?> şeklinde ekrana basabilirsiniz.

İyi kodlamalar...      
