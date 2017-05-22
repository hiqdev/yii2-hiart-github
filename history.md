# hiqdev/yii2-hiart-github

## [0.2.1] - 2017-05-22

- Renamed component to `hiart-github` <- github
    - [45ae8e8] 2017-05-22 csfixed [@hiqsol]
    - [e91d9ec] 2017-05-22 renamed component to `hiart-github` <- github [@hiqsol]
    - [b7e0540] 2017-05-22 csfixed [@hiqsol]
    - [c39496c] 2017-05-14 renamed `hidev.yml` [@hiqsol]

## [0.2.0] - 2017-04-15

- Switched to PHPUnit 6
    - [81b6ad2] 2017-04-15 removed require-dev phpunit [@hiqsol]
    - [36c0b27] 2017-04-15 switched to phpunit 6 [@hiqsol]
    - [76dace1] 2017-02-11 moved phpunit back to require-dev in composer.json [@hiqsol]
- Added more fields to `Repo` model
    - [bfac0bd] 2017-03-10 added more fields to Repo model: `homepage`, `forks_count`, `stargazers_count`, `watchers_count`, `open_issues_count` [@hiqsol]
    - [b04fa8f] 2017-03-05 csfixed [@hiqsol]
    - [6ea6285] 2017-03-05 added description into Repo model [@hiqsol]
    - [fb26983] 2017-03-05 improved buildPrefix a bit [@hiqsol]

## [0.1.0] - 2017-02-08

- Improved tests
    - [9562ad0] 2017-02-08 improved `Connection::getDb` used parent [@hiqsol]
    - [08b58f4] 2017-01-28 removed CurlRepoTest [@hiqsol]
    - [4ae4bdc] 2017-01-27 added CurlRepoTest [@hiqsol]
    - [e4d437b] 2017-01-27 added tests namespace [@hiqsol]
    - [a1dcb31] 2017-01-25 Removed redundant dependency [@SilverFire]
    - [9c9d959] 2017-01-25 Added phpunit/phpunit requirement [@SilverFire]
    - [756a0cc] 2017-01-25 Enhanced tests [@SilverFire]
    - [4a53247] 2017-01-25 added config for tests with token [@hiqsol]
- Improved query building with `QueryBuilder::buildPrefix`
    - [8247abd] 2017-01-27 moved prefix query building to QueryBuilder [@hiqsol]

## [0.0.1] - 2017-01-25

- Added basics
    - [7ece5b7] 2017-01-25 improved getting configuration in tests [@hiqsol]
    - [9b9d2a6] 2017-01-24 fixed yii2-hiart version requirements [@hiqsol]
    - [95ec62d] 2017-01-24 csfixed [@hiqsol]
    - [8269f90] 2017-01-24 fixed passing github.dbname [@hiqsol]
    - [ab8a72b] 2017-01-24 test with latest yii2 [@hiqsol]
    - [084b64e] 2017-01-24 added ConnectionInterface and DI config for it [@hiqsol]
    - [93dc875] 2017-01-23 added `dbname=github` and common config and used in test bootstrap [@hiqsol]
    - [f666868] 2017-01-23 basically done [@hiqsol]
    - [c784dcf] 2017-01-23 fixed to extend from rest Connection [@hiqsol]
    - [7d2a0b0] 2017-01-22 fixing tests [@hiqsol]
    - [b8cbe08] 2017-01-22 csfixed [@hiqsol]
    - [8321d9e] 2017-01-22 inited tests [@hiqsol]
    - [3e90067] 2017-01-22 fixed namespace typo [@hiqsol]
    - [4981db1] 2017-01-22 added Repo model [@hiqsol]
    - [aa0dca7] 2017-01-22 added empty classes [@hiqsol]
    - [27992b6] 2017-01-22 inited [@hiqsol]

## [Development started] - 2017-01-22

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[95ec62d]: https://github.com/hiqdev/yii2-hiart-github/commit/95ec62d
[8269f90]: https://github.com/hiqdev/yii2-hiart-github/commit/8269f90
[ab8a72b]: https://github.com/hiqdev/yii2-hiart-github/commit/ab8a72b
[084b64e]: https://github.com/hiqdev/yii2-hiart-github/commit/084b64e
[93dc875]: https://github.com/hiqdev/yii2-hiart-github/commit/93dc875
[f666868]: https://github.com/hiqdev/yii2-hiart-github/commit/f666868
[c784dcf]: https://github.com/hiqdev/yii2-hiart-github/commit/c784dcf
[7d2a0b0]: https://github.com/hiqdev/yii2-hiart-github/commit/7d2a0b0
[b8cbe08]: https://github.com/hiqdev/yii2-hiart-github/commit/b8cbe08
[8321d9e]: https://github.com/hiqdev/yii2-hiart-github/commit/8321d9e
[3e90067]: https://github.com/hiqdev/yii2-hiart-github/commit/3e90067
[4981db1]: https://github.com/hiqdev/yii2-hiart-github/commit/4981db1
[aa0dca7]: https://github.com/hiqdev/yii2-hiart-github/commit/aa0dca7
[27992b6]: https://github.com/hiqdev/yii2-hiart-github/commit/27992b6
[Under development]: https://github.com/hiqdev/yii2-hiart-github/compare/0.2.0...HEAD
[7ece5b7]: https://github.com/hiqdev/yii2-hiart-github/commit/7ece5b7
[9b9d2a6]: https://github.com/hiqdev/yii2-hiart-github/commit/9b9d2a6
[0.0.1]: https://github.com/hiqdev/yii2-hiart-github/releases/tag/0.0.1
[9562ad0]: https://github.com/hiqdev/yii2-hiart-github/commit/9562ad0
[08b58f4]: https://github.com/hiqdev/yii2-hiart-github/commit/08b58f4
[4ae4bdc]: https://github.com/hiqdev/yii2-hiart-github/commit/4ae4bdc
[e4d437b]: https://github.com/hiqdev/yii2-hiart-github/commit/e4d437b
[8247abd]: https://github.com/hiqdev/yii2-hiart-github/commit/8247abd
[a1dcb31]: https://github.com/hiqdev/yii2-hiart-github/commit/a1dcb31
[9c9d959]: https://github.com/hiqdev/yii2-hiart-github/commit/9c9d959
[756a0cc]: https://github.com/hiqdev/yii2-hiart-github/commit/756a0cc
[4a53247]: https://github.com/hiqdev/yii2-hiart-github/commit/4a53247
[0.1.0]: https://github.com/hiqdev/yii2-hiart-github/compare/0.0.1...0.1.0
[81b6ad2]: https://github.com/hiqdev/yii2-hiart-github/commit/81b6ad2
[36c0b27]: https://github.com/hiqdev/yii2-hiart-github/commit/36c0b27
[bfac0bd]: https://github.com/hiqdev/yii2-hiart-github/commit/bfac0bd
[b04fa8f]: https://github.com/hiqdev/yii2-hiart-github/commit/b04fa8f
[6ea6285]: https://github.com/hiqdev/yii2-hiart-github/commit/6ea6285
[fb26983]: https://github.com/hiqdev/yii2-hiart-github/commit/fb26983
[76dace1]: https://github.com/hiqdev/yii2-hiart-github/commit/76dace1
[0.2.0]: https://github.com/hiqdev/yii2-hiart-github/compare/0.1.0...0.2.0
[45ae8e8]: https://github.com/hiqdev/yii2-hiart-github/commit/45ae8e8
[e91d9ec]: https://github.com/hiqdev/yii2-hiart-github/commit/e91d9ec
[b7e0540]: https://github.com/hiqdev/yii2-hiart-github/commit/b7e0540
[c39496c]: https://github.com/hiqdev/yii2-hiart-github/commit/c39496c
[0.2.1]: https://github.com/hiqdev/yii2-hiart-github/compare/0.2.0...0.2.1
