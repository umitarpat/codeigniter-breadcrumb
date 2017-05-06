# codeigniter-breadcrumb

Merhaba 
Codeigniter Breadcrumb Kütüphanesini Nasıl Kullanmalısınız ?

Projenizin libraries klasörüne Breadcrumb.php dosyasını ekleyin.
Config/autoload.php içersinde $autoload['libraries'] = 'breadcrumb' şeklinde yada Controller dosyanızın __construct() methodunda $this->load->library('Breadcrumb'); şeklinde çağırabilirsiniz.

Breadcrumb ekleme $this->breadcrumb->addCrumb('Başlık','Link');
		  $this->breadcrumb->addCrumb('Başlık','Link');
                  
Breadcrumb render etmek için view dosyanızda 
<php $this->breadcrumb->makeBread(); php> şeklinde ekrana basabilirsiniz.

İyi kodlamalar...      
