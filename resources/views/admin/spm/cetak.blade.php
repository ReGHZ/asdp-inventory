<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <title>Cetak SPPBJ</title> --}}
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  {{-- boostrap5.1 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <style>
    .border1 {
      border: 1px solid black;
      border-collapse: collapse;
    }

    .no-bottom-border {
      border: 1px solid black;
      border-bottom: none;
      border-top: none;
      border-collapse: collapse;
    }
  </style>

</head>

<body data-new-gr-c-s-check-loaded="14.1024.0" data-gr-ext-installed="">

  <style>
    @media print {
      body * {
        visibility: hidden;
      }

      .print-area * {
        visibility: visible;
      }
    }
  </style>

  <style type="text/css" media="print">
    @media print {
      @page {
        margin-top: 0;
        margin-bottom: 0;
      }

      body {
        padding-top: 60px;
        padding-bottom: 60px;
      }
    }
  </style>

  <div class="print-area">


    <form>


      <table width="910" class="border1" align="center" cellpadding="0" cellspacing="0" style="width: 1011px;">
        <tbody>
          <tr>
            <td class="border1" style="width: 208.641px;" rowspan="4"><img src="{{url('backend/img/asdp.svg')}}" alt=""></td>
            <td class="border1" align="center" style="width: 872.359px; border-right: 0px; font-size: 14.0pt; font-family: FrutigerExt-Normal; color: black;" rowspan="4"><strong>FORM SURAT PERINTAH MEMBAYAR (SPM)</strong></td>
            <td class="border1" style="width: 133px;"><strong>No. Dokumen</strong></td>
            <td class="border1" style="width: 198px;">:&nbsp;<strong>KP-104.00.01</strong></td>
          </tr>
          <tr>
            <td class="border1" style="width: 133px;"><strong>Revisi</strong></td>
            <td class="border1" style="width: 198px;">:&nbsp;<strong>02</strong></td>
          </tr>
          <tr>
            <td class="border1" style="width: 133px;"><strong>Berlaku Efektif</strong></td>
            <td class="border1" style="width: 198px;">:&nbsp;<strong>4 September 2021</strong></td>
          </tr>
          <tr>
            <td class="border1" style="width: 133px;"><strong>Halaman</strong></td>
            <td class="border1" style="width: 198px;">:&nbsp;<strong>1 dari 1</strong></td>
          </tr>
        </tbody>
      </table>
      <br><br><br>
      <table width="910" align="center" cellpadding="0" cellspacing="2" style="width: 960px;">
        <tbody>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Nomor</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: SPM.{{$spm->nomor_surat_spm}}/UM/ASDP-KTP/2021</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Tanggal</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: {{tanggal_indonesia($spm->tanggal)}}</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Jenis Transaksi</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: {{$spm->jenis_transaksi}}</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Program</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: {{$spm->program}}</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Tahun Anggaran</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: {{ date('Y', strtotime($spm->tahun_anggaran)) }}</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 228.93px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Penanggung Jawab Unit Fungsi</td>
            <td style="width: 845.07px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">:&nbsp;{{$spm->devisi}}</td>
          </tr>
          <tr style="height: 23.293px;">
            <td style="width: 228.93px; height: 23.293px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Pembebanan Anggaran</td>
            <td style="width: 845.07px; height: 23.293px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">: {{$sp2bj->mataanggaran->nomor}} - {{$sp2bj->mataanggaran->keterangan}}</td>
          </tr>
        </tbody>
      </table>

      <br>

      <table width="910" border="1" align="center" cellpadding="0" cellspacing="0" style="width: 960px; border-color: black;">
        <thead>
          <tr class="text-center">
            <th class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">No</th>
            <th class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;" style="width: 18%;">Uraian Kegiatan</th>
            <th class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;" style="width: 15%;">Mata Anggaran</th>
            <th class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;" style="width: 20%;">Permohonan Dana</th>
            <th class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;" style="width: 20%;">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align="center" class="no-bottom-border" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp; 1 &nbsp;</td>
            <td class="no-bottom-border" style="width: 20%; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">
              <p style="margin: 4px">{{$sp2bj->nama_pengadaan}}</p>
            </td>
            <td class="no-bottom-border" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;{{$sp2bj->mataanggaran->nomor}}&nbsp;</td>
            <td class="no-bottom-border" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;<p style="margin: 4px;">
                Rp.
                {{number_format(
                    $sp2bj->barang->map(
                      function($el)
                      {
                        return $el->harga_satuan * $el->jumlah;
                      }
                    )->sum(), 0,',','.')
                  }},00
              </p>&nbsp;
            </td>
            <td class="no-bottom-border" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;{{$spm->keterangan}}&nbsp;</td>
          </tr>

          <tr>
            <td class="no-bottom-border" style="height: 7cm;">&nbsp;</td>
            <td class="no-bottom-border" style="height: 7cm;">&nbsp;</td>
            <td class="no-bottom-border" style="height: 7cm;">&nbsp;</td>
            <td class="no-bottom-border" style="height: 7cm;">&nbsp;</td>
            <td class="no-bottom-border" style="height: 7cm;">&nbsp;</td>
          </tr>

          {{-- {{$nomor=2}}
          @foreach ($itemspm as $i)
          <tr>
            <td class="border1 text-center">{{$nomor++}}</td>
            <td class="border1" style="width: 20%; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{$i->uraian_kegiatan}}</td>
            <td class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{$i->mataanggaran->nomor}}</td>
            <td class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Rp. {{number_format($i->dana, 0,',','.')}},00</td>
            <td class="border1" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{$i->keterangan}}</td>
          </tr>
          @endforeach --}}


          <tr>
            <td colspan="3" class="text-end border1 text-center">
              <strong style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;"> &nbsp;Jumlah&nbsp; </strong>
            </td>

            <td style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;" colspan="2" class="border1">
              <p style="margin: 4px;">

                Rp.
                {{number_format(
                    $sp2bj->barang->map(
                      function($el)
                      {
                        return $el->harga_satuan * $el->jumlah;
                      }
                      )->sum()
                      +
                      $spm->itemspm->map(
                        function($yha)
                        {
                          return $yha->dana;
                        }
                        )->sum(), 0,',','.'),
                      }},00
              </p>
            </td>
          </tr>
        </tbody>
      </table>

      <br>

      <table width="910" align="center" cellpadding="0" cellspacing="2" style="width: 960px;">
        <tbody>
          <tr style="height: 23px;">
            <td style="width: 229.711px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Terbilang</td>
            <td style="width: 847.289px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">:&nbsp;
              <i style="text-transform: capitalize">
                {{
            terbilang(
              $sp2bj->barang->map(
                function($el){
                  return $el->harga_satuan * $el->jumlah;
                }
              )->sum()+
              $spm->itemspm->map(
                function($yha){
                  return $yha->dana;
                }
              )->sum()
            ) 
          }} rupiah
              </i>
            </td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 229.711px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Penerima Dana</td>
            <td style="width: 847.289px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">:&nbsp;{{$spm->penerima_dana}}</td>
          </tr>
          <tr style="height: 23.543px;">
            <td style="width: 229.711px; height: 23.543px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Nomor Rek</td>
            <td style="width: 847.289px; height: 23.543px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">:&nbsp;{{$spm->nomor_rekening}}</td>
          </tr>
          <tr style="height: 23px;">
            <td style="width: 229.711px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Bank</td>
            <td style="width: 847.289px; height: 23px; font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">:&nbsp;{{$spm->bank}}</td>
          </tr>
        </tbody>
      </table>

      <br><br>

      <table width="910" align="center" cellpadding="0" cellspacing="2" style="width: 960px;">
        <tbody>
          <tr>
            <td style="width: 339px;">
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{tanggal_indonesia($spm->tanggal)}}</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Menyetujui,</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">General Manager</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><strong><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;"><u>{{$spm->tanda1->nama_karyawan}}</u></span></strong></p>
            </td>
            <td style="width: 424px;">
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{tanggal_indonesia($spm->tanggal)}}</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Menyetujui,</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Manager SDM &amp; Umum</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><strong><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;"><u>{{$spm->tanda2->nama_karyawan}}</u></span></strong></p>
            </td>
            <td style="width: 311.805px;">
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">{{tanggal_indonesia($spm->tanggal)}}</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Pembuat,</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">Staf SDM &amp; Umum</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US">&nbsp;</span></p>
              <p style="margin: 0cm; text-align: center;" align="center"><span lang="EN-US" style="font-size: 11.0pt; font-family: FrutigerExt-Normal; color: black;"><strong><u>{{$spm->tanda3->nama_karyawan}}</u></strong></span></p>
            </td>
          </tr>
        </tbody>
      </table>

      <br>

    </form>
  </div>

  <div class="container-lg text-center mt-4 mb-4">
    <button name="cetak" type="button" id="cetak" value="Cetak" onclick="Cetakan()" class="btn btn-primary" style="margin-right: 4cm;">cetak</button>
    <a href="{{url('admin/verspm/create')}}" name="Selanjutnya" class="btn btn-success">Selanjutnya</a>

  </div>

  <script>
    function Cetakan() {
      var x = document.getElementsByName("cetak");
      for (i = 0; i < x.length; i++) {
        x[i].style.visibility = "hidden";
      }
      window.print();
      alert("Jangan di tekan tombol Selanjutnya sebelum dokumen selesai tercetak!");
      for (i = 0; i < x.length; i++) {
        x[i].style.visibility = "visible";
      }
    }
  </script>


</body>
{{-- js boostrap 5.1 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>