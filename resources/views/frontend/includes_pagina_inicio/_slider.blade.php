
<section class="rev-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-4" data-source="gallery" id="rev_slider_13_1_wrapper" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

        <div class="rev_slider fullwidthabanner" data-version="5.4.5.2" id="rev_slider_13_1" style="display:none;">
            <ul>

                @foreach($servicios as $servicio)

                <li data-description="" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-{{ $servicio->id }}" data-masterspeed="default,default,default,default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-randomtransition="on" data-rotate="0,0,0,0" data-saveperformance="off" data-slotamount="default,default,default,default" data-thumb="{{ asset($servicio->pathAttachment()) }}" data-title="{{ $servicio->titulo }}" data-transition="random-static,random-premium,random">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset($servicio->pathAttachment()) }}">
                        
                        <div class="tp-caption tp-resizeme" data-frames='[{"delay":2380,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-height="['auto']" data-hoffset="" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="text" data-voffset="70" data-width="['auto']" data-x="center" data-y="center" id="slide-27-layer-3" style="z-index: 7; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family: Montserrat ;">
                            {{ $servicio->titulo }}
                        </div>

                        
                        
                        <div class="tp-caption rev-btn rev-button tp-resizeme" data-frames='[{"delay":3240,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bc:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]' data-height="['auto']" data-hoffset="" data-paddingbottom="[12,12,12,12]" data-paddingleft="[30,30,30,30]" data-paddingright="[30,30,30,30]" data-paddingtop="[12,12,12,12]" data-responsive_offset="on" data-textalign="['inherit','inherit','inherit','inherit']" data-type="button" data-voffset="150" data-width="['auto']" data-x="center" data-y="center" id="slide-27-layer-12" style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #ffffff; letter-spacing: px;font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            VER PROYECTOS
                        </div>
                    </img>
                </li>
                @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
            </div>
        </div>
    </div>
</section>
<!--=================================
 rev-slider -->
