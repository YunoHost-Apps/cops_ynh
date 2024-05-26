<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# COPS YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/cops.svg)](https://dash.yunohost.org/appci/app/cops) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/cops.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/cops.maintain.svg)

[![Instalatu COPS YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=cops)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek COPS YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

Creates an OPDS and HTML server based on a Calibre folder stored in NextCloud


**Paketatutako bertsioa:** 1.1.3~ynh2

**Demoa:** <http://cops-demo.slucas.fr/index.php>
## :red_circle: Ezaugarri zalantzagarriak

- **Mantendu gabeko paketea**: YunoHost pakete honek ez du mantenduko duenik, bere gain hartuko duen norbaiten beharra dauka. Honek esan nahi duena da mantentze-lanak minimoak izango direla eta aplikazioa erabiltzen ez duten boluntarioek egingo dituztela lanok; denborak aurrera egin ahala fidagarri izateari utziko dio. [Aplikazioak nola paketatu](https://yunohost.org/packaging_apps_intro) ikas dezakezu, zure gain hartu nahi baduzu.

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://blog.slucas.fr/projects/calibre-opds-php-server/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/seblucas/cops>
- YunoHost Denda: <https://apps.yunohost.org/app/cops>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/cops_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/cops_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/cops_ynh/tree/testing --debug
edo
sudo yunohost app upgrade cops -u https://github.com/YunoHost-Apps/cops_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
