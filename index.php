<?php
       $xmldata = '<Request>
       <Auth>
           <user_code>MNG</user_code>
           <password>MNG1</password>
       </Auth>
       <RequestID>MML2202109071151</RequestID>
       <RequestDate>2022-02-23T15:30:47+08:00</RequestDate>
       <PreStockOuts>
           <PreStockOut>
               <Header>
                   <RequestSeq>1</RequestSeq>
                   <TransactionType>NEW</TransactionType>
                   <Customer>MNG</Customer>
                   <Warehouse>HC001</Warehouse>
                   <IssueDate>2021-09-07T15:30:47+08:00</IssueDate>
                   <EstPickUpDate>2021-09-08T15:30:47+08:00</EstPickUpDate>
                   <Remark></Remark>
                   <PreStockOutNo>ORDER#0003</PreStockOutNo>
                   <CustomerRefNumber>ORDER#0003R</CustomerRefNumber>
                   <PickUpBy>YTO</PickUpBy>
                   <RefPlatform>MNG</RefPlatform>
                   <ShipToParty>
                       <Name>String</Name>
                       <Name2>String</Name2>
                       <Name3>String</Name3>
                       <Name4>String</Name4>
                       <Street>String</Street>
                       <CityName>String</CityName>
                       <CityCode>String</CityCode>
                       <State>String</State>
                       <CountryCode>String</CountryCode>
                       <PostalCode>String</PostalCode>
                       <Region>string</Region>
                       <Email>string</Email>
                       <TelNumber>string</TelNumber>
                       <ID>string</ID>
                       <IDType></IDType>
                       <IDImg1>Base64 string</IDImg1>
                       <IDImg2>Base64 string</IDImg2>
                       <AccNumber>string</AccNumber>
                       <LockerNumber>string</LockerNumber>
                   </ShipToParty>
               </Header>
               <Detail>
                   <Seq>1</Seq>
                   <ItemNumber>MNGITEM001</ItemNumber>
                   <PKG>0</PKG>
                   <Unit>CTN</Unit>
                   <InnerPKG>1</InnerPKG>
                   <InnerUnit>PCS</InnerUnit>
                   <UnitPrice>12</UnitPrice>
                   <UnitCurrency>USD</UnitCurrency>
                   <CBM>3.141</CBM>
                   <GrossWeight>3.14</GrossWeight>
                   <NetWeight>3.14</NetWeight>
               </Detail>
           </PreStockOut>
       </PreStockOuts>
   </Request>';


        $url = "https://wms.jancohealth.com/WHS_TEST/api/system/itapi_edi2?edi_code=PDO_IMPORT&user_code=MNG";

        $ch = curl_init();
        if (!$ch) {
            die("Couldn't initialize a cURL handle");
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmldata);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch); // execute
	echo $result;             //show response
	curl_close($ch);


?>