function CalcZakat() {
ob_start(); ?>

 <div class="row m-0">

<?php
$rice_price = 10000;
$gold_price = 800000;
?>

<form style="width: 100%;" method="post">
    <div class="row m-0 py-2 ">
      <div class="row" style="width: 100%;">
       <div class="col-sm-6">
           <div class="row m-0 py-2 align-items-center">
     <label for="static" class="col-sm-3 p-1 col-form-label">Harga Beras</label>
     <div class="col-sm-9 p-1">
        <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp</div>
        </div>
        <input type="text" name="hargaberas" readonly class="form-control bg-white font-weight-bold" id="inlineFormInputGroup" 
        placeholder="<?php echo number_format($rice_price, 0, ',', '.'); ?>">
   <div class="input-group-append">
    <span class="input-group-text">/kg</span>
  </div>
      </div>
     </div>
     </div>
     </div>
     
      <div class="col-sm-6">
          <div class="row m-0 py-2 align-items-center">
     <label for="static" class="col-sm-3 p-1 col-form-label">Harga Emas</label>
      <div class="col-sm-9 p-1">
        <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp</div>
        </div>
        <input type="text" name="hargaemas" readonly class="form-control bg-white font-weight-bold" id="inlineFormInputGroup" 
        placeholder="<?php echo number_format($gold_price, 0, ',', '.'); ?>">
    <div class="input-group-append">
    <span class="input-group-text">/gram</span>
  </div>
      </div>
     </div>
     </div>
    </div>
    </div>
    </div>
  
</form> 


<div id="accordion" class="accordion w-100">
<div class="card">
    <div class="card-header position-relative" id="headingOne">
      <h5 class="mb-0">
        <div class="pointer" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Zakat Harta (Maal)<i class="fa fa-angle-double-down position-absolute fa-lg" aria-hidden="true" style="right: 20px;"></i>
        </div>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

        <form action="" method="post" name="Kalkulator" id="zakatcalc" class="formzakat">
                <div>
                    <label for="static" class="col-sm-12 col-form-label keterangan"><blockquote>
Nisab: 85 x <?php echo $gold_price; ?> = Rp. <span class="min-harta d-none"><?php echo 85 * $gold_price; ?></span> <span><?php $minharta = 85 * $gold_price;
echo number_format($minharta, 0, ',', '.'); ?></span> 
                   </blockquote> </label>
                </div>
                
<div class="row py-2 align-items-center">                
                <label for="static" class="col-sm-6 col-form-label">a. Uang Tunai, Tabungan, Deposito atau sejenisnya</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control autocoma" id="inlineFormInputGroup" name="fa" onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
<div class="row py-2 align-items-center">                 
                 <label for="static" class="col-sm-6 col-form-label">b. Saham atau surat-surat berharga lainnya</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control autocoma" id="inlineFormInputGroup" name="fb" onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
<div class="row py-2 align-items-center">                  
                 <label for="static" class="col-sm-6 col-form-label">c. Real Estate (tidak termasuk rumah tinggal yang dipakai sekarang)</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control autocoma" id="inlineFormInputGroup" name="fc" onchange="calc_zakat()" value="0">
                  </div>
                 </div>
  </div>                
                 
<div class="row py-2 align-items-center">                  
                 <label for="static" class="col-sm-6 col-form-label">d. Emas, Perak, Permata atau sejenisnya</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control autocoma" id="inlineFormInputGroup" name="fd" onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>

<div class="row py-2 align-items-center">                   
                 <label for="static" class="col-sm-6 col-form-label">e. Mobil (lebih dari keperluan pekerjaan anggota keluarga)</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control autocoma" id="inlineFormInputGroup" name="fe" onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
                 
 <div class="row py-2 align-items-center">                 
                 <label for="static" class="col-sm-6 col-form-label">f. Jumlah Harta Simpanan (A+B+C+D+E)</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control hartasimpanan autocoma" id="inlineFormInputGroup" name="ff"  readonly onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
 <div class="row py-2 align-items-center">                 
                 <label for="static" class="col-sm-6 col-form-label">g. Hutang Pribadi yg jatuh tempo dalam tahun ini</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control hutang autocoma" id="inlineFormInputGroup" name="fg"  onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
<div class="row py-2 align-items-center">                 
                 <label for="static" class="col-sm-6 col-form-label">h. Harta simpanan kena zakat(F-G, jika nisab)</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control kenazakat autocoma" id="inlineFormInputGroup" name="fh" readonly onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div>                 
                 
<div class="row py-2 align-items-center ifzakat">
                 <label for="static" class="col-sm-6 col-form-label"><b>I. JUMLAH ZAKAT ATAS SIMPANAN YANG WAJIB DIBAYARKAN PER TAHUN (2,5% x H)</b></label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control akhir" id="inlineFormInputGroup" name="z1" readonly onchange="calc_zakat()" value="0">
                  </div>
                 </div>
</div> 

<div class="row py-2 ifzakat align-items-center">                 
                 <label for="static" class="col-sm-6 col-form-label"><b>J. JUMLAH ZAKAT ATAS SIMPANAN YANG WAJIB DIBAYARKAN PER BULAN</b></label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control vkbulan" id="inlineFormInputGroup" name="zb1" readonly onchange="calc_zakat()" value="0">
                  </div>
                 </div> 
</div>                  
        </form>
         </div>
      </div>
</div>
<div class="card">
    <div class="card-header position-relative" id="headingTwo">
      <h5 class="mb-0">
        <div class="pointer" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Zakat Pertanian<i class="fa fa-angle-double-down position-absolute fa-lg" aria-hidden="true" style="right: 20px;"></i>
        </div>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form action="" method="post" name="Kalkulator" id="zakatcalcpertanian" class="formzakat">
                <div>
                    <label for="static" class="col-sm-12 col-form-label keterangan"><blockquote>
Nisab: 653 x <span id="riceValue"><?php echo $rice_price; ?></span> = Rp.<span class="nisab d-none"><?php echo $rice_price * 653; ?></span> <span class=""><?php $nisab = $rice_price * 653;
echo number_format($nisab, 0, ',', '.'); ?></span> 
                    </blockquote></label>
                </div>
                
<div class="row py-2 align-items-center">                
                <label for="static" class="col-sm-6 col-form-label">A. Jenis pengairan </label>
                 <div class="form-check col-sm-6 pl-sm-4 ml-sm-0 ml-5 pl-0">
                     <div class="py-1">
                      <input class="form-check-input pointer" onclick="calc_zakat_pertanian('5')" type="radio" name="pengairan" id="exampleRadios1" value="5" checked>
                      <label class="form-check-label pointer" for="exampleRadios1">
                        Buatan
                      </label>
                    </div>
                    <div class="py-1">
                      <input class="form-check-input pointer" onclick="calc_zakat_pertanian('10')" type="radio" name="pengairan" id="exampleRadios2" value="10">
                      <label class="form-check-label pointer" for="exampleRadios2">
                        Air Hujan
                      </label>
                    </div>
                    </div>
</div>                    
<div class="row py-2 align-items-center">                 
                <label for="static" class="col-sm-6 col-form-label">B. Pendapatan hasil panen</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control pendapatanbertani autocoma" id="inlineFormInputGroup" name="pendapatanpertanian"  onchange="calc_zakat_pertanian()" value="0">
                  </div>
                 </div>
</div>                    
<div class="row py-2 align-items-center">                  
                 <label for="static" class="col-sm-6 col-form-label"> C. Biaya produksi (biaya pengolahan lahan, ongkos buruh, pembelian bibit, pupuk, obat-obatan) </label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control kenazakatperatanian autocoma" id="inlineFormInputGroup" name="biayaproduksi"  onchange="calc_zakat_pertanian()" value="0">
                  </div>
                 </div>
</div>                    
<div class="row py-2 align-items-center">                  
                 <label for="static" class="col-sm-6 col-form-label"> D. Hasil bersih panen (B dikurangi C, jika B > nisab)</label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp</div>
                    </div>
                    <input  class="form-control hasiltanitotal" id="inlineFormInputGroup" name="hasiltani" readonly onchange="calc_zakat_pertanian()" value="0">
                  </div>
                 </div>
</div>                    
<div class="row py-2 ifzakat2 align-items-center">                  
                 <label for="static" class="col-sm-6 col-form-label"><b>  I. Jumlah zakat pertanian yang wajib dibayarkan (<span class="persentase">5</span>% x D)  </b></label>
                 <div class="col-sm-6">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="hasil">Rp</div>
                    </div>
                    <input  class="form-control jumlahzakatharusdibayar" id="hasil" name="jumlahzakatharusdibayar" readonly onchange="calc_zakat_pertanian()" value="0">
                  </div>
                 </div>
</div>                    
        </form>
      </div>
    </div>
</div>

</div>
			
    <script>
    jQuery(document).ready(function ($) {
        calc_zakat = function(){
        var hasil = $('#zakatcalc').serializeArray();
        var isi = Number(0);
        var hartasimpanan = Number(0);
          $.each(hasil, function(i, field){
            isi += Number(field.value);
            if(field.name == 'fa' || field.name == 'fb' || field.name == 'fc' || field.name == 'fd' || field.name == 'fe') {
                hartasimpanan += Number(field.value.replace(/,/g, ''));
            }
          });
          $(".fieldzakat").val(isi);
          var simpanharta = String(hartasimpanan).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          $(".hartasimpanan").val(simpanharta);
          var kenazakat = hartasimpanan-($(".hutang").val().replace(/,/g, ''));
           var kenazakat2 = String(kenazakat).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          if (kenazakat<=$(".min-harta").text()) {
              $(".kenazakat").val(kenazakat2);
              $(".akhir").val('Tidak Kena Zakat');
              $(".vkbulan").val('Tidak Kena Zakat');
              $(".ifzakat").removeClass('kenazakataktiv');
          }else {
              var checkedNew = String(kenazakat*(2.5/100)).split('.')[0];
              var vvkbulan = String(kenazakat*(2.5/100/12)).split('.')[0];
            $(".ifzakat").addClass('kenazakataktiv');
            $(".kenazakat").val(String(kenazakat).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            $(".akhir").val(String(checkedNew).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            $(".vkbulan").val(String(vvkbulan).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
          }
          
        }
    });
    
    
     jQuery(document).ready(function ($) {
        calc_zakat_pertanian = function(data=5){
            $(".persentase").text(data);
             //alert(data); 
        
            var hasiltani = ($(".pendapatanbertani").val().replace(/,/g, ''))-($(".kenazakatperatanian").val().replace(/,/g, ''));
            var hasiltani2 = String(hasiltani).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            $(".hasiltanitotal").val(hasiltani2);
            if (hasiltani <=$(".nisab").text()) {
                $(".jumlahzakatharusdibayar").val('Tidak Kena Zakat'); 
                 $(".ifzakat2").removeClass('kenazakataktiv2');
            } else {
                var zakatpertanian = (($(".persentase").text()/100)*hasiltani);
                var zakatpertanian2 = String(zakatpertanian).split('.')[0];
                var zakatpertanian3 = String(zakatpertanian2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              $(".ifzakat2").addClass('kenazakataktiv2');
             $(".jumlahzakatharusdibayar").val(zakatpertanian3);   
            }
            // if (hasiltani>=$(".nisab").val()){
            //     $(".jumlahzakatharusdibayar").val(($(".persentase").text()/100)*hasiltani);
            // }

          };
     });
    </script> 
  <style>   
  .pointer {
    cursor: pointer;
}  
   </style>  
		</div>
<?php return ob_get_clean();
}
add_shortcode('CalcZakat', 'CalcZakat');
