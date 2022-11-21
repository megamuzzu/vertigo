 
<style type="text/css">

   
   @page  {
   size: A4;
   margin: 2rem;
   }
   #booking_agreement {
   padding: 50px;
   }
   #booking_agreement .mtable p {
   margin-bottom: 0;
   }
   .mtable td,
   .mtable th {
   padding-left: .25rem;
   padding-right: .25rem;
   vertical-align: top;
   }
   #booking_agreement ol {
   padding-left: 12px;
   }
   #booking_agreement ol>li {
   margin-bottom: 15px;
   padding-left: 25px;
   }
   #booking_agreement ol ol {
   /* list-style-type: decimal-leading-zero; */
   padding-left: 20px;
   }
   #booking_agreement ol ol>li {
   padding-left: 10px;
   }
   
   #booking_agreement {
   padding: 20px;
   }
   .invoice
   {
   background: #fff;
   /*border: 1px solid rgba(0,0,0,.125);*/
   position: relative;
   }

   .mtable {
   width: 100%;
   margin-bottom: 0;
   color: #212529;
   background-color: transparent;
   }
   .mtable td,
   .mtable th {
   padding: 0;
   border: 1px solid #212529;
   }
   .mtable .noborder td,
   .mtable .noborder th {
   border: 0;
   padding: 0;
   }
   @page  {
   size: A4;
   /* auto is the initial value */
   /*margin: 0;*/
   /*border: 1px solid #666;*/
   }

   @media print { 
      html,
   body,
   div,
   span,
   applet,
   object,
   iframe,
   p,
   blockquote,
   pre,
   a,
   abbr,
   acronym,
   address,
   big,
   cite,
   code,
   del,
   dfn,
   em,
   font,
   ins,
   kbd,
   q,
   s,
   samp,
   small,
   strike,
   strong,
   sub,
   sup,
   tt,
   var,
   dl,
   dt,
   dd,
   ol,
   ul,
   li,
   fieldset,
   form,
   label,
   legend,
   table,
   caption,
   tbody,
   tfoot,
   thead,
   tr,
   th,
   td {
   font-size: 14px !important;
   }
   
         .pagebreak {page-break-after: always;}
         
      /*body * { visibility: hidden; }*/
       
      .section-to-print>.image-header{text-align: center;}
  
   .cart-table th,
   .table th,
   .cart-table td,
   .table td {
   /* border-color: #000; */
   color: #000;
   }
   .section-to-print,
   .section-to-print * {
   visibility: visible;
   }
   .section-to-print p
   {
   margin: 0;
   }
   .section-to-print {
   /*position: absolute;*/
   left: 0;
   top: 0;
   right: 0;
   }
   .row>* {
   position: unset;
   }
   .card-footer{visibility: hidden;}

   } 
}
 
</style>
<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12">
            <div>
               <div class="card-header ">
                  <div class="row ">
                     <div class="col-sm-12">
                        <p >Booking Agreement</p>
                     </div>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body " style='max-width: 920px; border: 1px solid #fff; '>
                  <div id="booking_agreement" class="section-to-print invoice ">
                     <div class="text-center image-header">
                        <table style="text-align: center;display: inline;">
                           <tr>
                              <td style="text-align: center;"><img class="seal-img d-print-block " style="max-width: 120PX;" src="<?php echo base_url()?>assets/admin/images/<?php echo @$company_details['logo'];?>" alt="logo"></td>
                           </tr>
                        </table>
                        <br>
                        <br>
                        <h4>अनुबंध/एग्रमेंट </h4>
                        <br>
                     </div>
                     <p>यह एग्रीमेंट <strong><?php echo strtoupper(@$company_details['title']);?></strong> (जैसा कि यहाँ पर “कंपनी” निर्दिष्ट
                        किया गया है) प्रथम पक्ष, और श्री/ श्रीमति/ मिस <strong><?php echo  ucwords($receipt_dtl['customername']);?></strong>
                        <?php
                           if(!empty($receipt_dtl['father_name']))
                           {
                               ?>
                        पुत्र/ पुत्री श्री/ श्रीमति
                        <strong><?php echo  ucwords($receipt_dtl['father_name']);?></strong>   
                        <?php
                           }
                           ?>
                        <?php
                           $bill_address = '';
                           if(isset($receipt_dtl['village']) && $receipt_dtl['village'] !=='')
                           {
                             $bill_address.= "Village - ".$receipt_dtl['village'].",";  
                           }
                            
                           if(isset($receipt_dtl['city']) && $receipt_dtl['city'] !=='')
                           {
                                
                                 $bill_address.=" Tehsil - ".(($receipt_dtl['city']=='Other')?$receipt_dtl['other_city']:$receipt_dtl['city']).",";  
                               
                             
                           }
                           
                           if(isset($receipt_dtl['district']) && $receipt_dtl['district'] !=='')
                           {
                              
                                 $bill_address.=" District - ".(($receipt_dtl['district']=='Other')?$receipt_dtl['other_district']:$receipt_dtl['district']).","; 
                           } 
                            
                           if(isset($receipt_dtl['state']) && $receipt_dtl['state'] !=='')
                           {
                              
                                 $bill_address.=" State - ".(($receipt_dtl['state']=='Other')?$receipt_dtl['other_state']:$receipt_dtl['state']).","; 
                           }
                            
                           if(isset($receipt_dtl['pincode']) && $receipt_dtl['pincode'] !=='')
                           {
                              
                                 $bill_address.=" Pincode - ".($receipt_dtl['pincode']).","; 
                           }
                           
                           
                           ?>
                        पता: <?php echo $bill_address;?>
                     </p>
                     <p>(जैसा की यहाँ पर “किसान” निर्दिष्ट किया गया है) द्वितीय पक्ष, के मध्य, <?php echo (@$company_details['office_address']);?> में किया गया है |</p>
                     <p>जैसा कि कम्पनी उच्च गुणवत्ता वाले बीज पौधे और अन्य पदार्थ किसानों को बेचती है, सहायता के तौर पर फसल के उत्पादन के दौरान कंसल्टेशन सपोर्ट भी उपलब्ध करवाती है और किसान द्वारा अन्तिम उपज को पूर्व निर्धारित मापदण्ड के अनुरूप किसान से क्रय करती है।</p>
                     <p>जैसा कि कम्पनी किसान से क्रय किये गए, अन्तिम उत्पाद को प्रोसेसिंग, एक्सपोर्ट ट्रैडर्स, थोक बाजार और अन्य दूसरे क्लाइंट को सप्लाई करती है।</p>
                     <p>जैसा कि कम्पनी उच्च गुणवत्ता वाले पौधों को अपनी प्रयोगशाला/ग्रीन हाउस/पॉली हाउस में उगाती है और इसे किसानों को बेचती है।</p>
                     <p>जैसा कि किसान पौधों और अन्य पदार्थाें से होने वाले लाभ से पूरी तरह सहमत लेकर, अपने और अपने परिवार के उपभोग के अलावा कुछ पौधों और बीजों को वाणिज्यिक खेती के उददेश्य से भी खरीदने की इच्छा रखते है।</p>
                     <p>जैसा कि किसान इसकी प्रक्रिया, मात्रा गुणवत्ता और कृषि उत्पादन से पूरी तरह सहमत है और उचित मात्रा में पौधों/बीजों और अन्य पदार्थाें को अपने खेताों में उगाते है।</p>
                     <p>और जैसा कि किसान इन पौधों/बीजों और अन्य पदार्थाें के रोपण के सम्बन्ध में फसल चक्र के दौरान इनकी सीमाओं, कर्मियों और समस्याओं से पूरी तरह परिचित है।</p>
                     <p>और जैसा कि फसल चक्र के दौरान किसान तकनिकी ज्ञान, दिशा निर्देश, मार्ग दर्शन और सलाह को भली भांति समझते है।</p>
                     <p>और जैसा कि किसान पूर्व भुगतान करके अग्रिम बुंकिग कराने के इच्छुक है और पिछले कुछ सालों से उन किसानों की तरह जो इन पौधो/बीजों से अच्छा उत्पादन ले रहे है, की तरह उत्पादन में वृद्धि की अपेक्षा रखते है। निम्नलिखित खण्ड 13 के संदर्भ में किसान द्वारा पैदा किये गए अन्तिम उत्पाद और जैसा कि इसमें एक तरफ कम्पनी को क्रेता तथा दूसरी तरफ किसान को विक्रेता कहा गया है।</p>
                     <p>और जैसा कि निम्नलिखित खण्ड 13 में प्राविधानित नियम एवं शर्ताें के अनुसार (पपीते के फल) को विक्रेता द्वारा क्रेता को विक्रय करने के लिए प्रस्ताव किया गया है और क्रेता ने विक्रेता को इस आधार पर कि वह इसकी (पपीते के फल) उत्पादन के समय नियमित सप्लाई करेगा, क्रय करने के लिए सहमति जताई है।</p>
                     <ol>
                        <li>
                           <strong>पौधों/बीजों और अन्य पदार्थाे का मूल्य/बुकिंग एवं विवरणः-</strong><br>
                           पौधे का तय मूल्य रूपये 30.00/प्रति पौधा है, (च्ंचंलं.त्मक स्ंकल ैममकसपदहे) तथा इसमें ट्रान्सपोर्ट सम्मिलित है, किसान को अग्रिम बुकिंग के समय मूल्य का 50 प्रतिशत भुगतान करना होता है और कम्पनी को वितरण के सप्ताह के बारे में सूचित करना होता है, किसान को वितरण से कम से कम दो सप्ताह पहले शेष बचे हुए मूल्य का कम्पनी को भुगतान करना होता है।
                           <ol style="list-style-type: decimal-leading-zero;">
                              <li>किसान को यह ज्ञात है कि पौधे/बीज और अन्य पदार्थाे की जैविक प्रकृति एवं उनके विकास प्रक्रियाओं की वजह से कम्पनी को वितरण में विलम्ब के लिए दायी नहीं बनाया जा सकता, हालांकि कम्पनी किसान को आश्वास्त करती है कि वह पौधों को  निर्धारित तिथि पर वितरित करने के लिए सम्भव एवं सर्वाेच्च प्रयत्न करती है।</li>
                           </ol>
                        </li>
                        <li>
                           <strong>बाध्यता, बुंकिग निरस्तीकरण और मूल्य वापसी</strong><br>
                           कुछ आकस्मिक एवं कम्पनी के नियंत्रण के बाहर की परिस्थितियों (जैसे प्राकृतिक आपदाऐं इत्यादि) में कम्पनी किसान को बिना कोई कारण बताये या बिना कोई अग्रिम सूचना दिए अग्रिम बुकिंग को आंशिक/पूर्णतः निरस्त कर सकती है, किसान के पास आंशिक/पूर्णतः निरस्तीकरण के मामे में केाई मुआवजे का दावा करने का अधिकार नहीं होगा।
                           <ol style="list-style-type: decimal-leading-zero;">
                              <li>किसान द्वारा यह सहमति दी जाती है कि आंशिक/पूर्ण बुंकिग के निरस्तीकरण के मामले में उन्हें जमा धनराशि पर कोई ब्याज/मुआवजा पाने का अधिकार नहीं होगा।</li>
                           </ol>
                        </li>
                        <li><strong>कम्पनी के कार्यालय/नर्सरी/शाखा साईट से वितरण-</strong><br>
                           किसान इस बात से सहमत है कि पौध वितरण कम्पनी के कार्यालय/नर्सरी/शाखा साईट इत्यादि से होना है, कम्पनी पौधों या अन्य पदार्थाें को किसान के खेत तक पहंुचाती है तो उन्हें पहले से निर्धारित दर के आधार पर मूल्य भुगतान करना पडता है। कम्पनी परिवहन के दौरान पौधों या अन्य पदार्थाें के क्षति या उखडने, टूटने, सूखने, मुरझाने के मामले में जिम्मेदार होती है। और कम्पनी की जिम्मेदारी किसान को स्वस्थ पौधा खेत में पहंुचाने तक होती है। किसान को पौधा हस्तान्तरित होने के बाद कम्पनी की जिम्मेदारी समाप्त हो जाती है। 
                        </li>
                        <li  ><strong>वितरण लेने में असफलता एवं मूल्य वापसी के विषय में-</strong><br>
                           कम्पनी द्वारा वितरण की सूचना के पश्चात किसान को वितरण को सात दिन के अंदर लेने की बाध्यता होती है, किसान द्वारा ऐसा करने में असफल होने के मामलों में कम्पनी पौधों को दूसरे पक्षकार को विक्रय करने का अधिकार रखती है। कम्पनी का यह प्रयास होता है कि वह इन पौधों या पदार्थाें को त्वरित रूप से किसानों को जिन्होनें अग्रिम बुंकिग की है, उनको दे दिया जाऐं। दूसरे पक्षों को विक्रय करने की स्थिति में यदि कोई नुकसान होता है तो वह किसान द्वारा जमा की गयी राशि से काट ली जाएगी तथा शेष राशि यदि बचती है तो वह किसानों को वापस कर दी जाऐगी। 
                        </li>
                        <li>
                           <strong>पौधो/बीजों को वितरण के समय स्वीकार/अस्वीकार करने का विकल्प </strong><br>
                           चूंकि किसान या उनके प्रतिनिधि वितरण को कम्पनी के स्थान/कार्यालय/नर्सरी/शेड हाउस/ग्रीन हाउस/वेंडर साईट आदि से प्राप्त करते है और इस सम्बन्ध में संविदा और उसका प्रस्तुतीकरण वितरण के समय ही पूरा हो जाता है इसलिए किसान वितरण के समय ही पौधे या बीज या अन्य पदार्थ को लेने के लिए स्वीकार या अस्वीकार कर सकते है इस संदर्भ में किसान अपने अनुभव एवं ज्ञान के आधार पर भली भांति देख समझ कर निर्माण करने के लिए स्वतन्त्र होते है।
                           <ol>
                              <li><strong>प्रमाणित दोषपूर्ण पदार्थ की अस्वीकृति के लिए ब्याज सहित वापसी</strong><br>
                                 यदि किसान, तथ्य एवं प्रमाण पूर्वक यह सिद्ध करता है कि वितरित किया हुआ पौधा, बीज या पदार्थ गुणवत्ता या प्रजाति के संदर्भ में दोषपूर्ण है, तो वह अपनी भुगतान की हुई राशि को 10 प्रतिशत वार्षिक ब्याज के साथ वापस प्राप्त करने का अधिकार होगा। 
                              </li>
                           </ol>
                        </li>
                        <li><strong>कम्पनी के वाणिज्यिक साहित्य/लिटरेचर/मैन्यूअल/वीडियो/लेख/प्रकाशन अथवा प्रतिनिधित्व अथवा प्रतिनिधित्व या किसी के दावे, वारन्टी या गारन्टी नहीं समझे जायेगें,</strong><br>
                           सामान्यतः ऐसा पाया गया है की कम्पनी द्वारा वितरित किये गए साहित्य/मैन्युअल फसल में एक निश्चित उत्पादकता/उत्पादन के आंकडों को दर्शाते है, इस प्रकार के लेख/विवरण मात्र एक तथ्य है, जिन्हें कम्पनी ने अपने प्रयोगों, विशेषज्ञों एवं अन्य किसानों के अनुभवों के आधार पर एवं उनके मार्गदर्शन में तैयार किया है, ये आंकडें पौधे के विभिन्न दशाओं में अंतनिर्हित योग्यता या अंतिम सम्भावना या कुछ परिस्थितियों में सर्वोत्तम अविश्वसनीय उत्पादकता का उल्लेख करते है, वे किसान को दिए गए पौधों के लिए कम्पनी के गारन्टी या वारन्टी किसी भी तरीके से नहीं माने जायेगें। उत्पादकता के सम्बन्ध मेें कम्पनी कोई भी गारन्टी या वारन्टी नहीं देती है।
                        </li>
                        <li>
                           कम्पनी के प्रतिनिधियो, विशेषज्ञों द्वारा दिए गए दिशा निर्देश/सुझाव/सलाह अंतिम रूप से उत्पादन या उत्पादकता के बारे में किसी प्रकार की प्रतिबद्धता का गठन नहीं करते।
                           <ol>
                              <li> कोई सुझाव/अवलोकन/वचन या वादा जो कम्पनी के प्रतिनिधि द्वारा या बाहय विशेषज्ञों के द्वारा किया जाता है, उसे कम्पनी की तरफ से भूलवंश भी बाध्यकारी वचनबद्धता नहीं समझा जायेगा। कम्पनी अपनी उपरोक्त सेवा सभाव पूर्वक, बिना किसी प्रतिफल या बिना संविदात्मक दायित्व के प्रदान करती है, ऐसे लोगों के ये अवलोकन या कथन समय समय पर अपने व्यक्तिगत या सामूहिक अनुभवों पर आधारित होते है, ये समस्याओं के लिए समुचित हो भी सकते है, और नही भी हो सकते है। इसलिए ये कथन/सुझाव/सलाह अवलोकन/निर्देशन ऐसे व्यक्तियों के द्वारा दिए गए उनके व्यक्तिगत कथन/सुझाव/सलाह/अवलोकन/निर्देशन हानिरहित कथन हो सकते है, ये अनुकूल वातावरणों में अच्छे और उच्च उत्पादन में सहायक हो सकते है।</li>
                           </ol>
                        </li>
                        <li  >
                           <strong>दिए गए पौधे/बीज जैविक उत्पाद होते हुए भी स्वयं में कोई पूर्वानुमेयवृद्धि या उत्पादकता का प्रमाण प्रस्तुत नहीं करते,</strong>
                           <ol>
                              <li>यह एक सामान्य ज्ञान है कि पौधों/बीजों से अंतिम उत्पादन और वृद्धि अन्य उच्च रोपित पदार्थाें की तरह विभिन्न के परिवर्तनशील घटकों पर निर्भर हो सकते है, जिनमें से कुछ निम्नलिखित है:-</li>
                              <li><strong>मृदा</strong> के प्रकार, बनावट, गहराई, जल निकासी, नमी धारक क्षमता, पी0एम0 मान इत्यादि।
                              </li>
                              <li><strong>जलवायु</strong>  के घटक, जैसे तापमान, आद्रता, वर्षा, वायु, तीव्र्रता, और सूर्य प्रकाश इत्यादि।</li>
                              <li><strong>सिंचाई</strong> की निर्भरता, पानी की गुणवत्ता, मात्रा, समय सारणी, सिंचाई के प्रकार इत्यादि।</li>
                              <li><strong>उर्वरक</strong> की मात्रा, जैविक या रासयानिक, उर्वरकों के प्रकार इत्यादि।</li>
                              <li><strong>सूक्ष्म पोषक तत्व </strong> पोषक तत्वों की कमी, पर्याप्त उत्पादकता में कमी का एक महत्वपूर्ण घटक होता है।</li>
                              <li><strong>फसली की सघनता/प्रारूप</strong> अति संघनता या उच्च घनत्व उत्पादन में कमी का एक कारण होता है, फसल चक्रीकरण सम्पूर्ण उत्पादन में एक महत्वपूर्ण भूमिका अदा करता है।</li>
                              <li><strong>कृषि अभ्यासः</strong> खेतों में कुछ प्रक्रम जैसे की जुताई, गहरी जुताई, सह फसल, शाखाओं को तापमान घटने बढने की दशा में ढकना, नर फूलों को तोडना, इत्यादि भी उत्पादकता को प्रभावित करते है। </li>
                              <li><strong>बाहय घटक: </strong>जैसे की जंगली जानवरों का प्रकोप, आवारा पशुओं का विचरण, बंदरों का आक्रमण, यांत्रिक क्षति, चोरी इत्यादि भी उत्पादन पर विपरीत प्रभाव डालने हेतु उत्तरदायी होते है।</li>
                              <li><strong>खर पतवार</strong> ये मुख्य पौधों के साथ विकास में प्रतिस्पर्धा करते है, पोषक तत्वों, आद्रता को ग्रहण करने में रूकावट पैदा करते है, ये पौधों में रोगों के लिए उत्तरदायी होते है, वे उत्पादन क्षमता को कम करने के लिए उत्तरदायी होते है।</li>
                              <li><strong>कीट पंतगें  </strong>एफिडस, माहू, थ्रिप्स, नीमाटॉड, बोर इत्यादि कीडें मकोडें फसलों को क्षति पहुंचाते है और अनावश्यक रोगों को निमंत्रण देते है।</li>
                              <li><strong>रोग</strong> पत्तियों से सम्बन्धित रोग, तने एं जड़ से सम्बन्धित रोग, फंफूद एवं जीवाणु रोग, येले मौजेक, उकठा रोड, फलों एवं फूलों का झडना, अन्य विषाणु जनित रोग विभिन्न मामलों में उत्पादन को कम या अधिक मात्रा में प्रभावित करते है, कई मामलों में ये रोग सम्पूर्ण फसल को क्षति पहंुचा सकते है।</li>
                              <li>उपरोक्त कुछ तत्वों के समुचित  प्रभाव से जैसे की मृदा में पानी की कमी, फसल चक्र न अपनाना, जल भराव, मिटटी का पी0एच0, पानी का टी0डी0एस0 इत्यादि अन्य कारकों के सामान्य परिस्थितिओं में होते हुए भी पौधें की वृद्धि को बुरी तरह प्रभावित करते है, जैविक उर्वरक, प्रमुख पोषक तत्व, द्वितीय तत्व और सूक्ष्म पोषक तत्व उत्पादन में वृद्धि के लिए उत्तरदायी कारक समझे जाते है। </li>
                              <li>लॉ ऑफ मिनियम जो की वोन लीबिग द्वारा बताया गया है, पौधे में किसी भी आवश्यक पोषक तत्व की कमी यद्यपि की दूसरे पोषक तत्वों के पर्याप्त मात्रा में होते हुए भी पौधे की उत्पादकता को सीमित कर देते है।</li>
                              <li><strong>प्राकृतिक आपदाएं: </strong> -जैसे कि चक्रवात, मूसलाधार बारिश, अत्याधिक हिमपात, अत्याधिक ठंडी या गर्म धाराऐं, टिडिडयों का आक्रमण, अग्रि ओर बाढ इत्यादि पूर्ण रूप से फसलों को नुकसान पहुचाने के मुख्य कारक होते है।</li>
                           </ol>
                        </li>
                        <li>
                           <strong>दावा त्याग/अस्वीकरण/खंडन </strong> उपरोक्त जटिलताओं के मददेनजर यह वास्वतव में अकल्पनीय है कि उपज या उत्पादकता के बाद भी उचित रूप से फसल के लाभ हानि का पूर्वानुमान लगाया जा सकता है या नहीं, इसके लिए कम्पनी किसानों को कोई गारंटी या वांरटी नहीं देती है।
                           <ol>
                              <li>इसकी सफलता, स्थान, जलवायु और कृषि क्रम के अभ्यास और अन्य कारकों पर निर्भर करती है, यह ऐसा इसलिए है क्योंकि कम्पनी उपरोक्त खण्ड 8 में बताये गये तत्यों कि उपस्थित या अनुपस्थिति से अनभिज्ञ है और कुछ मामलों में यदि इसकों यह ज्ञान है तो भी किसानों के खेत में घटित के खेत में घटित होने वाली जटिलतायें कम्पनी के नियंत्रण से बाहर है, क्योंकि कम्पनी हजारों की संख्या में किसानों से सौदा करती है, इसलिए कम्पनी के द्वारा अंतिम रूप से उत्पादन या उत्पादकता के बारे में केाई भी गांरन्टी नहीं दी जाती है।</li>
                           </ol>
                        </li>
                        <li>
                           <strong> सीमित प्रतिनिधित्व </strong>
                           पौधों के कम्पनी की प्रयोगशाला/पोली हाउस/ग्रीन हाउस से बाहर निकलते समय सम्भावित रूप से पुष्टि की जा सकती है, कि क्या उनका आनुवांिशक प्रक्रम, शुद्धता, रोगमुक्त, लक्षण, और पौधों की स्वाभाविक क्षमता प्राप्त करने की सम्भावना, आदर्श परिस्थितियों में उच्च उत्पादकता का गुण रखती है या नहीं 
                           <ol>
                              <li>हालांकि उस बात की सम्भावना है कि प्रक्रिया और पौधों के उत्पादन में समुचित सावधानी के बावजूद पौधों के उत्पादन में समुचित सावधानी के बावजूद पौधों का कुछ प्रतिशत लगभग 2 से 5 प्रतिशत ऑफ टाईप (अशुद्धि) के पौधों होते है। ऐसी विविधता पौधों के विभिन्न भागों में या प्रजनन अंगों में प्रकट होती है भिन्न प्रजाति/अशुद्धि (ऑफ टाइप) की विविधता प्राकृतिक उत्परिवर्तन के द्वारा उत्पन्न हो सकती है।</li>
                              <li>किसानों के खेत में अग्रिम उत्पादकता और अंतिम उत्पादन में कमी पहले नहीं बतायी जा सकती है। क्योंकि यह उपरोक्त क्लॉज 8 में कारकों पर निर्भर करती है जो कम्पनी के नियंत्रण में और अन्य मानवीय नियंत्रण से बाहर है।</li>
                              <li>क्लॉज-8 में बतायी गयी सीमाओं में से कुछ सीमायें परिश्रमी किसानों के द्वारा जो मानवीय अभ्यास या वो कम्पनी के विशेषज्ञ/विश्वविद्यालय/अन्य किसान/सरकारी अधिकारी के द्वारा बतायें गये है, के द्वारा नियंत्रित की जा सकती है, अन्य किसान विषम परिस्थितियों का सामना करते हुए अत्याधिक उत्पादन (कभी कभी सामान्य से दुगना प्राप्त) करते है। उन्होनें ऐसा पाया है कि पौधें अत्याधिक उत्पादकता और त्वरित परिपक्कता अच्छे गुणवत्ता के लिए वरदान साबित होते है और किसानों को बाजार मूल्य से अधिक लाभ लेने के लिए अत्याधिक संभाव्यता को प्रदान करते है। 
                              </li>
                           </ol>
                        </li>
                        <li><strong>सीमित दायित्व </strong> कम्पनी की देनदारी मूल रूप से केवल पौधे/बीज के वास्तविक मूल्य अथवा क्षति पूर्ति हेतु दूसरे पौधे/बीज देने तक की है। डेलिवरी के उपरान्त किसी भी परिस्थिति में कम्पनी दुर्घटना बस या अन्य किसी प्रकार से क्षतिग्रस्त पौधें की क्षतिपूर्ति हेतु बाध्य नहीं होगी। कम्पनी ने इस बावत पूरी जानकारी किसान को दे दी है। और किसान की इस पर सहमति है। यह क्लॉज केवल उन पौधों के सम्बन्ध में है जो वास्तव में प्रारम्भ से ही (डेलिवरी से पूर्व) क्षतिग्रस्त थे। इस प्रकार से ऐसे पौधों की संख्या कम्पनी के कृषि विशेषज्ञ के द्वारा साईट का निरक्षण करने के बाद सुनिश्चित की जाएगी और यह किसानों के लिए बाध्य होगी। 
                        </li>
                        <li><strong> विक्रेता का प्रमुख आधार पर स्वामी के साथ लेन-देनः-</strong>
                           कम्पनी के उत्पादोें के डीलर/कांट्रेक्टर स्वतंत्र व्यापारी है, वे कम्पनी के कर्मचारी अथवा प्रतिनिधि नहीं है। इसलिए कम्पनी उनके किसी भी कार्य/व्यवहार/छुपाव या असत्य कथन के लिए जिम्मेदार नहीं होगी।
                        </li>
                        <li >
                           <strong>अंतिम उत्पाद के लिए बाई-बैंक अग्रीमेंट</strong>
                           <ol>
                              <li>
                                 <strong>विक्रेता की बाध्यताऐं</strong>
                                 <ol type="A">
                                    <li>विक्रेता की इस बात पर सहमति है की वह प्रत्येक तोडाई पर कम से कम 5 से 10 टन ताजे पपीते के फल क्रेता को सप्लाई करेगा। </li>
                                    <li>विक्रेता की इस बात पर सहमति है की यह सप्लाई क्रेता द्वारा निम्नलिखित गुणवत्ता मानकों के अनुरूप होगी।</li>
                                    <ol type="I">
                                       <li>विक्रेता की इस बात पर सहमति है कि वह पपीतें के फल जो सप्लाए किए जाने वाले है, फल कम से कम 6 माह की अवधि के हो, उन पर हल्की पीली पटटी हो, अपरिपक्क, कच्चे, बेरंग पपीते के फल गुणवत्ता माप दण्ड गुणवत्ता माप दण्ड का उल्लंघन होगा और कम्पनी इस प्रकार के बगीचे के उत्पादन का क्रय करने हेतु बाध्य नहीं होगा।</li>
                                       <li>विक्रेता की इस बात पर सहमति है कि कटिंग के लिए तैयार पपीते का बगीचा वायरस अथवा किसी भी प्रकार की अन्य बीमारी से मुक्त होने चाहिए, वायरस युक्त एवं बीमारी से ग्रस्त बगीचे का उत्पादन, गुणवत्ता मापदण्ड का उल्लंघन होगा और कम्पनी इस प्रकार के बगीचे के उत्पादन का क्रय करने हेतु बाध्य नहीं होगी। </li>
                                       <li>विक्रेता की इस बात पर सहमति है कि किसी भी प्रकार के कैमिकल्स या रासायनिक दवाओं या किसी भी अन्य प्रकार के स्प्रे अथवा किसी भी अन्य दूसरे कारणों की वजह से फलों पर उत्पन्न हुए दाग, धब्बे, चक्कते, पपडी इत्यादि गुणवत्ता मापदण्ड गुणवत्ता मापदण्ड का उल्लंघन होगा और कम्पनी इस प्रकार के बगीचे के उत्पादन का क्रय करने हेतु बाध्य नहीं होगी।</li>
                                       <li>विक्रेता की इस बात पर सहमति है कि फंगस युक्त, अपरिपक्क, पिल, पीले, सडे गले, दबे हुए भी गुणवत्ता मापदण्ड का उल्लंघन होगा, इसे भी कम्पनी खरीदने हेतु बाध्य नहीं होगा।</li>
                                    </ol>
                                 </ol>
                              </li>
                              <li>
                                 <strong>क्रेता की बाध्यताऐं:-</strong>
                                 <ol type="A">
                                    <li>क्रेता, देश में प्रयोग किये जा रहे है, भुगतान के सामान्य तरीके (चैक, बैंक ड्राफ्ट, ऑनलाईन ट्रान्सफर छम्थ्ज्ए त्ज्ळै) के द्वारा विक्रेता को तय गुणवत्ता वाले ताजे पपीते के फल के बदले तत्कालीन बाजार मूल्य (दिल्ली आजादपुर फल मण्डी) के अनुसारक करेगा।
                                    </li>
                                    <li>क्रेता, समस्त खर्चे काटकर, जैसे तुडाई, पैकिंग, लोडिंग, ट्रान्सपोर्ट इत्यादि भुगतान करने के लिए प्रतिबद्ध है, भुगतान की गयी राशि पपीते के फल की गुणवत्ता एवं प्रतिदिन के मार्किट रेट के उतार चढाव पर निर्भर करेगी।</li>
                                 </ol>
                              </li>
                              <li><strong>प्राकृतिक बाध्यता:- </strong>कुछ ऐसी दशायें जिसके बारे में पूर्वानुमान नहीं लगाया जा सके जैसे कि ओलावृष्टि, सूखा, अत्याधिक वर्षा, युद्ध, अग्रि, नागरिक अंशति और अन्य कारण जो कि पक्षकारों के नियंत्रण से बाहर है जिसे बाध्यकारी कारण कहा जाता है ऐसे मामले इन कारकों के गठित होने के बाद उत्पन्न होते है तो कोई भी पक्षकार का पालन करने के लिए क्षति के लिए हानि के लिए उत्तरदायित्व नहीं समझ जोयगा।</li>
                              <li><strong>काल/अवधि </strong>काल/अवधि इस करार की अवधि एक फसली चक्र की है, जो पौध बुंकिग की तारीख 
                                 <strong><span style="text-decoration:underline;">(<?php echo @date('d M Y',strtotime($receipt_dtl['booking_date']));?>)
                                 </span></strong>से प्रारम्भ होकर अंतिम तोडाई तक की तारीख पर समाप्त होगी।
                              </li>
                              <li>
                                 <strong>समापन/अवसान </strong>पक्षकार इस करार को निम्नलिखित परिस्थितियों में लिखित सूचना देकर या आपसी सहमति से समाप्त कर सकते है।
                                 <ol style="list-style-type: upper-alpha;">
                                    <li>क्रेता के फसल का तय मूल्य अदा करने में असमर्थ होने पर अथवा करार के किसी             प्रावधान को भंग करने पर इस मामले में क्रेता (कम्पनी), विक्रेता (किसान) को करार का पालन करने के लिए क्षतिपूर्ति प्रदान करेगा। 
                                    </li>
                                    <li>विक्रेता द्वारा तय किये गए उत्पादों की गुणवत्ता को उपलब्ध करवाने अथवा भेजने में असमर्थ होने पर या करार के किसी प्रकार के भंग करने पर। इस मामले में विक्रेता  (किसान), क्रेता (कम्पनी) को करार का पालन न करने पर हुई हानि के लिए क्षतिपूर्ति करेगा।</li>
                                    <li>क्लॉज 13 के बिन्दु-3 के अनुसार बाध्यता की किसी दशाओं के होने पर जो की पक्षकारों को करार के पूर्ण करने में अवरोध उत्पन्न करता है।</li>
                                 </ol>
                              </li>
                           </ol>
                        </li>
                        <li>
                           <strong>न्यायिक क्षेत्राधिकार :</strong> न्यायिक क्षेत्राधिकार - किसी भी प्रकार के वाद विवाद का निपटारा बुलन्दशहर क्षेत्र की सक्षम अदालतों के अधीन ही मान्य होगा। 
                           <ol>
                              <li>
                                 यह करार दिनांक (<strong> <?php echo @date('d M Y',strtotime($receipt_dtl['booking_date']));?> </strong>) को पक्षकारों ने अपनी मुहर/हस्ताक्षर के साथ खूब सोच समझकर, शांत चित्त मन से, अपने नफे नुकसान को ध्यान में रखकर अपने-अपने गवाहों की उपस्थिति में हस्ताक्षरित किया है। कम्पनी की तरफ से निदेशक श्री नीरज कुमार जो कि कम्पनी के द्वारा अधिकृत किये गए है, और दूसरी तरफ <strong>श्री/</strong> <strong>श्रीमति/</strong>
                                 <strong>मिस </strong><?php echo  ucwords($receipt_dtl['customername']);?>  
                                 <p> <?php
                                    if(!empty($receipt_dtl['father_name']))
                                    {
                                        ?>
                                    पुत्र/ पुत्री श्री/ श्रीमति
                                    <strong><?php echo  ucwords($receipt_dtl['father_name']);?></strong>   
                                    <?php
                                       }
                                       ?> के द्वारा हस्ताक्षर/मुुहर किया गया है। 
                                 </p>
                              </li>
                           </ol>
                        </li>
                     </ol>
                     <div class="pagebreak" ></div>
                     <br >
                    <div class="text-center">
                     <img class="seal-img d-print-block" style="max-width: 70%;" src="<?php echo base_url()?>assets/admin/images/<?php echo @$company_details['seal_logo'];?>" alt="seal-logo">
                     </div>
                     <br>
                     <div class="row mt-5">
                        <div class="col-7">For, </div>
                        <div class="col-5">नाम एवं हस्ताक्षर…………………………</div>
                     </div>
                     <div class="row">
                        <div class="col-7">
                           <p><?php echo ucwords($company_details['title']);?></p>
                        </div>
                        <div class="col-5">
                           <div>किसान</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-7">
                           <p>गवाह : <br><br> नाम, पता एवं हस्ताक्षर</p>
                        </div>
                        <div class="col-5">
                           <div>गवाह: <br><br> नाम, पता एवं हस्ताक्षर</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-7">
                           <ol>
                              <li>
                                 <img src="<?php echo base_url()?>assets/admin/images/signatures/avnish.png" alt="naveen-signature" style="max-width: 120px;"> <br>
                                 अवनीश कुमार <br>
                                 F -135 महावीर एन्क्लेव <br>
                                 पार्ट 3rd गली नंबर 82 उत्तम <br>
                                 नगर नई दिल्ली 10059
                              </li>
                           </ol>
                        </div>
                        <div class="col-5">
                           <br>
                           <div>1</div>
                        </div>
                     </div>
                     <br>
                     <br>
                     <div class="row  ">
                        <div class="col-7">
                           <ol start="2">
                              <li>
                                 <img src="<?php echo base_url()?>assets/admin/images/sudha-signature.png" alt="sudha-signature" style="max-width: 120px;"> <br>
                                 संतोष<br>
                                 RZ C - 75 महावीर एन्क्लेव<br>
                                 पार्ट 3rd गली नंबर 36 उत्तम <br>
                                 नगर नई दिल्ली 10059
                              </li>
                           </ol>
                        </div>
                        <div class="col-5">
                           <br>
                           <div>2</div>
                        </div>
                     </div>
                     <div align="left">
                        <div class="text-center">
                           <img class="seal-img d-print-block" style="max-width: 120px;margin: auto;" src="<?php echo base_url()?>assets/admin/images/<?php echo @$company_details['logo'];?>" alt="logo">
                           <div style="font-size: 20px;"><strong><?php echo @$company_details['title'];?></strong></div>
                           <div style="font-size: 16px;"><strong>Phone : <?php echo @$company_details['phone'];?></strong></div>
                           <div><strong><?php echo @$company_details['office_address'];?></strong></div>
                           <div>
                              WhatsApp:   <a href="https://wa.me/<?php echo @$company_details['phone'];?>"><?php echo @$company_details['phone'];?></a>
                              <br>
                              Email:      <a href="mailto:<?php echo @$company_details['email'];?>"><?php echo @$company_details['email'];?></a>
                           </div>
                           <div>
                              Website:   <a href="<?php echo @$company_details['website'];?>/"><?php echo @$company_details['website'];?></a>
                              <br>
                              <?php 
                                 if(!empty($company_details['social_url']))
                                 {
                                     $jsondecodes = json_decode($company_details['social_url']);
                                     /*echo "<pre>";
                                     print_r($jsondecodes);
                                     echo "</pre>";
                                     die;*/
                                 
                                     if(!empty($jsondecodes))
                                     {
                                         foreach ($jsondecodes as $key  ) {
                                              echo $key->title." : "."<a target='_BLANK' href='".$key->url."'>".$key->url."</a><br>";
                                         }
                                     }
                                 }
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer clearfix pl-1 pb-1 mt-3">
                  <button type="button" id="print_receipt" class="btn btn-primary btn-sm mr-2"><i class="fas fa-print"></i>
                  Print</button>
                  <a class="btn btn-default btn-sm" href="<?php echo base_url()?>admin/bookings">Cancel</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
<script>
   $('#print_without_seal').on('click', function() {
       $('#print_without_seal').addClass('active');
       $('#print_with_seal').removeClass('active');
       $('.seal-img').addClass('hidden-print d-none');
       $('.seal-img').removeClass('d-print-block d-block');
   });
   $('#print_with_seal').on('click', function() {
       $('#print_with_seal').addClass('active');
       $('#print_without_seal').removeClass('active');
       $('.seal-img').removeClass('hidden-print d-none');
       $('.seal-img').addClass('d-print-block d-block');
   });
   $('#print_receipt').on('click', function() {
   
   
        window.print();
   });
   
    
</script>