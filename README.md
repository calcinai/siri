# Siri

This project is almost entirely generated from the [Siri](https://en.wikipedia.org/wiki/Service_Interface_for_Real_Time_Information) xsd shchemas found [here](http://user47094.vs.easily.co.uk/siri/schema/schemas.htm)

The generated XML can then be posted using a HTTP client (like [Guzzle](http://docs.guzzlephp.org))


## Instalation
With composer:
```
composer require calcinai/siri 
```

## Example

### Serialization

```php
use Calcinai\Siri\Objects\ServiceRequest;
use Calcinai\Siri\Objects\Siri;
use Calcinai\Siri\Objects\VehicleMonitoringRequest;

$requestTimestamp = new DateTime();

$siri = new Siri();
$request = new ServiceRequest();
$vmRequest = new VehicleMonitoringRequest();

$siri->setVersion(1.3)
    ->setServiceRequest($request);

$vmRequest->setVersion(1.3)
    ->setVehicleRef('3706')
    ->setRequestTimestamp($requestTimestamp);

$request->setVehicleMonitoringRequest($vmRequest)
    ->setRequestTimestamp($requestTimestamp)
    ->setRequestorRef('Requestor');

$serializer = new \Calcinai\Siri\Serializer();
$xml = $serializer->serialize($siri);

echo $xml;
```

Will produce XML like 
```xml
<?xml version="1.0" encoding="UTF-8"?>
<Siri xmlns="http://www.siri.org.uk/siri" version="1.3">
  <ServiceRequest>
    <RequestTimestamp>2019-07-18T23:08:07+00:00</RequestTimestamp>
    <RequestorRef>Requestor</RequestorRef>
    <VehicleMonitoringRequest version="1.3">
      <RequestTimestamp>2019-07-18T23:08:07+00:00</RequestTimestamp>
      <VehicleRef>3706</VehicleRef>
    </VehicleMonitoringRequest>
  </ServiceRequest>
</Siri>
```

### Deserialization
The xml above can be deserialized to recreate the object structure

```php
$siri = $serializer->deserialize($xml);

print_r($siri); //The root siri object
```

## Acknowlegments

This code is almost completely generated from [xsd2php](https://github.com/goetas-webservices/xsd2php), thanks [@goetas-webservices](https://github.com/goetas-webservices)!


