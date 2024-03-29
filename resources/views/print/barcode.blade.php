@foreach($barcodes as $barcode)
    
    @if($barcode->ref_type == 'Manifest')        
	    <div style="margin: 20px 0">
            <div style="text-align: center;margin: 0 auto;">
                <span style="font-size:12px;">{{strtoupper($barcode->ref_action).' - '.date('d/m/Y H:i')}}</span>
                <h3 style="margin: 10px;">GATE PASS</h3>
                
                <h4 style="">TERMINAL KODJA TERRAMARIN</h4>
                
                {!!QrCode::margin(0)->size(80)->generate($barcode->barcode)!!}
                <p style="font-size: 10px;margin: 0;padding: 0;">{{$barcode->barcode}}</p>
                <p style="font-size: 13px;font-weight: bold;">
                    {{$barcode->NOHBL}}<br />
                    {{$barcode->CONSIGNEE}}                   
                </p>
                <p style="font-size: 13px;">
                    NO. DOC {{$barcode->NO_SPPB}}<br />
				    JNS. DOC {{$barcode->KODE_DOKUMEN}}<br /> 
                    TGL. DOC {{date('d/m/Y', strtotime($barcode->TGL_SPPB))}}<br /><br />
                   
                </p>
                <!-- Lokasi : {{$barcode->location_name}} -->
                <span style="font-size:10px;">{{'EXPIRED - '.date('d/m/Y', strtotime($barcode->expired))}}</span>
            </div>
        </div>
        <div style="display:block; page-break-before:always;"></div>
    @else
        <div style="margin: 20px 0">
            <div style="text-align: center;margin: 0 auto;">
                <span style="font-size:12px;">{{strtoupper($barcode->ref_action).' - '.date('d/m/Y H:i')}}</span>
                <h3 style="margin: 10px;">GATE PASS</h3>
                
                <h4 style="">TERMINAL KODJA TERRAMARIN</h4>
              
                {!!QrCode::margin(0)->size(80)->generate($barcode->barcode)!!}
                <p style="font-size: 10px;margin: 0;padding: 0;">{{$barcode->barcode}}</p>
                <p style="font-size: 13px;font-weight: bold;">
                    {{$barcode->NOCONTAINER}}<br />
                    {{strtoupper($barcode->ref_type).' '.$barcode->SIZE."'"}} - {{$barcode->KD_TPS_ASAL}}<br />
                    {{$barcode->NO_SEAL}}
                </p>
                <p style="font-size: 13px;">
                    {{$barcode->VESSEL}} - VOYAGE {{$barcode->VOY}}
                </p>                 
				<p style="font-size: 13px;">
				@if(strtoupper($barcode->ref_action) != 'RELEASE')
                    NO. PLP {{$barcode->NO_PLP}}<br />
                    TGL. PLP {{date('d/m/Y', strtotime($barcode->TGL_PLP))}}<br /><br />
                    Lokasi : {{$barcode->location_name}}
				@else
				    NO. DOC {{$barcode->NO_SPPB}}<br />
				    JNS. DOC {{$barcode->KODE_DOKUMEN}}<br /> 
                    TGL. DOC {{date('d/m/Y', strtotime($barcode->TGL_SPPB))}}<br /><br />
                 
			
				@endif	
                </p>
                <!--   Lokasi : {{$barcode->location_name}} -->
								
               <span style="font-size:10px;">{{'EXPIRED - '.date('d/m/Y', strtotime($barcode->expired))}}</span>
            </div>
        </div>
        <div style="display:block; page-break-after:always;"></div>
    @endif
@endforeach
