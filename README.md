
# Crafted API's

* www.doe.ir
* www.arzdigital.com
* This list Will be upgrade later 
* You can use These api with any language you Know
## DOE:


### API Reference

Note: You Can check DOE-api.php

Login (**Required**)
```
  Host aqms.doe.ir
```

```
  POST /Service/v1/login/
```

| Parameter | Type     | data   (URLEncode)             |
| :-------- | :------- | :------------------------- |
| `password`     | `fixed` | doeAndroidPass |
| `grant_type`  | `fixed` | password |
| `username`  | `fixed` | doeAndroidUser |


Getting Data:

Region

```
  GET /Service/api/v1/Region/Get/?StateId=2
```
Station

```
  GET /Service/api/v2/Station/GetByStateId/?StateId=2
```

AQI
```
  GET /Service/api/v2/AQI/Get/?StateId=2
```



## ArzDigital
### API Reference

Header (**Required**)
```
  {"x-device-token": "585240a9-2cbc-4c1f-98fe-e7b6a91782cf" }
```

```
  Host data.arzdigital.com
```

Tether API
```
  GET /app/market-data/9
```
![l](https://raw.githubusercontent.com/ConfusedCharacter/Crafted-Api-s-/main/screenshot/1.jpg)

Market API
```
  GET /app/update-price?sort=rank&page=1
```
![l](https://raw.githubusercontent.com/ConfusedCharacter/Crafted-Api-s-/main/screenshot/2.jpg)


* Wait For new API's 😉