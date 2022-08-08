@extends('layout')

@section('content')
<style>
    .table-bordered {
        border: 1px solid #aeaeae;
    }
    .table-bordered, .table-bordered tbody tr td, .table-bordered tbody tr th {
        border: 1px solid #aeaeae;
    }
</style>
    <!--Welcome, {{ Auth::getUser()->name }}-->
    
    <div class="row">
  <div class="col-lg-6 col-xl-6">
    <div class="box box-danger">
    <div class="panel">
      <div id="chartYor" style="min-width: 310px; height: 300px; max-width: 600px; margin: 0 auto" ></div>
      </div>  
    </div>
    </div>
    <div class="col-sm-6">
        <div class = "box box-success">
            <table class="table  table-hover " style="background: lightgreen;">
                <tbody>
                    <tr>
                        <th>TPS ASAL</th>
                        <!--<th>JML CONT (PLP)</th>-->
                        <th>FCL GATE IN BULAN {{strtoupper(date('F Y'))}}</th>
                    </tr>
                    @foreach($countbytps as $key=>$value)
                    <tr>
                        <td>{{ $key }}</td>
                        <!--<td align="center">{{ $value[0] }}</td>-->
                        <td align="center">{{ $value[1] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th>TOTAL</th>
                        <!--<td align="center"><strong>{{ $totcounttpsp }}</strong></td>-->
                        <td align="center"><strong>{{ $totcounttpsg }}</strong></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

       <!--  <div class="col-lg-6 col-xs-6"> -->
            <!-- small box -->
          <!--  <div class="small-box bg-aqua">
                <div class="inner">
				  
				  <div class=”col-md-1″>
                    <h3>{{ number_format($sorarn1->total,'2',',','.') }}<sup style="font-size: 20px">%</sup></h3>

                    <p>LCL SOR AIRIN UTARA (ARN1) %</p>
				 </div>
				 <div class=”col-md-1″>
                    <h3>{{ number_format($sorarn3->total,'2',',','.') }}<sup style="font-size: 20px">%</sup></h3>

                    <p>LCL SOR AIRIN BARAT (ARN3) %</p>
				 </div>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('lcl-report-inout') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div> 
        </div> -->
        <!-- ./col -->
      <!--  <div class="col-lg-6 col-xl-6">
           small box 
            <div class="small-box bg-yellow">
                <div class="inner">
				   <div class=”col-md″>
                    <h3>{{ number_format($yorarn1->total,'2',',','.') }}<sup style="font-size: 20px">%</sup></h3>

                    <p>FCL YOR AIRIN UTARA (ARN1) %</p>
				  </div>
				  <div class=”col-md-1″>
                    <h3>{{ number_format($yorarn3->total,'2',',','.') }}<sup style="font-size: 20px">%</sup></h3>

                    <p>FCL YOR AIRIN BARAT (ARN3) %</p>
				  </div>	
                </div>
               
                <a href="{{ route('fcl-report-rekap') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>  -->

    <div class="row">
       <!-- <div class="col-md-6">
            <table class="table table-bordered table-hover table-striped" style="background: #FFF;">
                <tbody>
                    <tr>
                        <th>KODE DOKUMEN</th>
                        <th>JUMLAH DOKUMEN KELUAR LCL BULAN {{strtoupper(date('F Y'))}}</th>
                    </tr>
                    @foreach($countbydoclcl as $key=>$value)
                    <tr>
                        <th>{{ $key }}</th>
                        <td align="center">{{ $value }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> -->
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped" style="background: #FFF;">
                <tbody>
                    <tr>
                        <th>KODE DOKUMEN</th>
                        <th>JUMLAH DOKUMEN KELUAR FCL BULAN {{strtoupper(date('F Y'))}}</th>
                    </tr>
                    @foreach($countbydoc as $key=>$value)
                    <tr>
                        <th>{{ $key }}</th>
                        <td align="center">{{ $value }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
    <div class="row">
       <!-- <div class="col-sm-6">
            <table class="table table-bordered table-hover table-striped" style="background: #FFF;">
                <tbody>
                    <tr>
                        <th>TPS ASAL</th>
                        <th>JML CONT (PLP)</th>
                        <th>LCL GATE IN BULAN {{strtoupper(date('F Y'))}}</th>
                    </tr>
                    @foreach($countbytpslcl as $key=>$value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td align="center">{{ $value[0] }}</td>
                        <td align="center">{{ $value[1] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th>TOTAL</th>
                        <!--<td align="center"><strong>{{ $totcounttpsp }}</strong></td>
                        <td align="center"><strong>{{ $totcounttpsglcl }}</strong></td>
                    </tr>
                </tbody>
            </table>           
        </div> -->
       
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h4>LAPORAN YOR TANGGAL {{strtoupper(date('d F Y H:i:s'))}}</h4>
            <table class="table table-bordered table-hover table-striped" style="background: #FFF;">
                <tbody>
                    <tr>
                        <th>KODE GUDANG</th>
                        <th>TIPE</th>
                        <th>KAPASITAS</th>
						<th>TERPAKAI</th>
                        <th>YOR</th>
                    </tr>
                  
                    <tr>
                        <th align="center">KTM1</th>
                        <td align="center">DRY</td>
                        <td align="center">{{number_format($yarn1['drykaparn1'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn1['dryarn1'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn1['dryyorarn1'],'2',',','.')}}</td>
                    </tr>
					<!--<tr>
                        <th align="center">ARN1</th>
                        <td align="center">REEFER</td>
						<td align="center">{{number_format($yarn1['rfrkaparn1'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn1['rfrarn1'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn1['rfryorarn1'],'2',',','.')}}</td>
                    </tr>
					<tr>
                        <th align="center">ARN1</th>
                        <td align="center">DG</td>
						<td align="center">{{number_format($yarn1['dgkaparn1'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn1['dgarn1'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn1['dgyorarn1'],'2',',','.')}}</td>
                    </tr>-->
					
                </tbody>
            </table>
			
	<!--		<table class="table table-bordered table-hover table-striped" style="background: #FFF;">
                <tbody>
                    <tr>
                        <th>KODE GUDANG</th>
                        <th>TIPE</th>
                        <th>KAPASITAS</th>
						<th>TERPAKAI</th>
                        <th>YOR</th>
                    </tr>
               
                    <tr>
                        <th align="center">ARN3</th>
                        <td align="center">DRY</td>
                        <td align="center">{{number_format($yarn3['drykaparn3'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn3['dryarn3'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn3['dryyorarn3'],'2',',','.')}}</td>
                    </tr>
					<tr>
                        <th align="center">ARN3</th>
                        <td align="center">REEFER</td>
						<td align="center">{{number_format($yarn3['rfrkaparn3'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn3['rfrarn3'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn3['rfryorarn3'],'2',',','.')}}</td>
                    </tr>
					<tr>
                        <th align="center">ARN3</th>
                        <td align="center">DG</td>
						<td align="center">{{number_format($yarn3['dgkaparn3'],'0',',','.') }}</td>
						<td align="center">{{number_format($yarn3['dgarn3'],'0',',','.')}}</td>
                        <td align="center">{{number_format($yarn3['dgyorarn3'],'2',',','.')}}</td>
                    </tr>
                </tbody>
            </table> -->
			
			
			
        </div>
    </div>
<!--    <div class="row">
    
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Line Chart</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                      <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:250px"></canvas>
                  </div>
                </div>
            </div>
        </div>
    </div>-->
    
@endsection

@section('chart')


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="highcharts/highcharts.js"></script>
<script src="highcharts/modules/exporting.js"></script>
<script src="highcharts/modules/export-data.js"></script>
<script>
    Highcharts.chart('chartYor', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Kapasitas YOR'
            },
			// subtitle: {
            // text: 'KTM-1 BULAN {{strtoupper(date('F Y'))}}'
           // },
 
    //tooltip: {
    //    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    //    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //        '<td style="padding:0"><b>{point.y:.1f} Boxes</b></td></tr>',
     //   footerFormat: '</table>',
     //   shared: false,
     //   useHTML: true
    //},
	 tooltip: {
                pointFormat: '{series.name}: <b>{point.y} ({point.percentage:.1f}%)</b>'
			   // pointFormat: '{series.name}: <b>{point.y} </b>'
            },
		
    //plotOptions: {
    //    pie: {
    //        pointPadding: 0.2,
    //        borderWidth: 0
     //   }
    //},
	
	plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y} ({point.percentage:.1f}%)',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
						 }
               }
    },
	
    series: [{
        name: 'YOR',
		//colorByPoint: true,
         data: [{
                    name: 'Terisi',
                    y: {{$yorarn1['kapasitas_terisi']}},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Available',
                    y:{{$yorarn1['kapasitas_kosong']}}               
                }]
    }]
});
              
</script>


@endsection