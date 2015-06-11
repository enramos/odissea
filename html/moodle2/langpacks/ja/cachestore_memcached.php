<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_memcached', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = '書き込みバッファ';
$string['bufferwrites_help'] = 'I/Oバッファを有効または無効にします。I/Oバッファを有効にすることで、コマンドを送信する代わりに「バッファ」に保持します。データ参照に関する操作すべてにおいて、このバッファをリモート接続に送信します。接続終了または閉鎖に関しても、リモート接続にバッファ済みデータが送信されることになります。';
$string['clustered'] = 'クラスタサーバを有効にする';
$string['clusteredheader'] = 'サーバを分割する';
$string['clustered_help'] = 'これは「read-one」および「set-multi」機能を有効にするために使用します。

これはロードバランス設定に関して、ストア改善を作成する場合を意図しています。ストアは1台のサーバ (通常、localhost) から取得しますが、多くの台数 (ロードバランスプール内のサーバすべて) を設定します。リードの割合が高く設定されているキャッシュの場合、これにより相当割合のネットワークオーバーヘッドを減らすことができます。

この設定が有効にされた場合、上記に一覧表示されているサーバがフェッチに使用されます。';
$string['hash'] = 'ハッシュメソッド';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'デフォルト (1回につき1つ)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'アイテムキーに使用されるハッシュアルゴリズムを指定してください。それぞれのハッシュアルゴリズムには利点と不利点があります。あなたが分からない場合、または気にしない場合、デフォルトのままにしてください。';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['pluginname'] = 'Memcached';
$string['prefix'] = '前置キー';
$string['prefix_help'] = 'この設定はアイテムキーに「ドメイン」を作成するために使用することができます。あなたは単一のmemcachedインストレーションにおいて、複数のmemcachedストアを作成できるようになります。キー長の問題に遭遇しないために、文字長は半角16文字以上にすることはできません。';
$string['prefixinvalid'] = '無効な接頭辞です。あなたは「a-z A-Z 0-9-_」のみ使用することができます。';
$string['serialiser_igbinary'] = 'igbinaryシリアライザ';
$string['serialiser_json'] = 'JSONシリアライザ';
$string['serialiser_php'] = 'デフォルトのPHPシリアライザ';
$string['servers'] = 'サーバ';
$string['serversclusterinvalid'] = 'クラスタが有効にされている場合、厳密に1台のサーバを必要とします。';
$string['servers_help'] = 'ここではmemcachedアダプタに使用されるサーバを設定します。
サーバは1行に1台のサーバアドレス、任意でポートおよびウェイト値を記述することができます。
ポートが指定されない場合、デフォルトポート (11211) が使用されます。

例:
<pre>
server.url.com
ipaddress:ポート
servername:ポート:ウェイト値
</pre>

「クラスタサーバを有効にする」が有効にされた場合、ここに1台のサーバのみ表示される必要があります。通常、これは「127.0.0.1」または「localhost」のようにローカルマシンを解決する名称となります。';
$string['sessionhandlerconflict'] = '警告: memcached インスタンス ({$a}) はセッションとして同じmemcachedサーバを使用するよう設定されています。すべてのキャッシュを削除することにより、セッションも削除されることになります。';
$string['setservers'] = 'サーバを設定する';
$string['setservers_help'] = 'これはデータが修正された場合に更新されるサーバの一覧です。通常、プール内サーバの完全修飾名となります。仮に異なるホスト名であったとしても、上記に一覧表示されている「サーバ」を含む必要があります。サーバはサーバアドレスおよび任意でポートを1行に1台定義します。
ポートが提供されない場合、デフォルトポート (11211) が使用されます。

例:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'テストサーバ';
$string['testservers_desc'] = 'memcachedサーバをテストするための1つまたはそれ以上の接続ストリングです。テストサーバが指定された場合、管理ブロックのキャッシュパフォーマンスページを使用してmemcacheパフォーマンスをテストすることができます。
例: 127.0.0.1:11211';
$string['usecompression'] = '圧縮を使用する';
$string['usecompression_help'] = 'ペイロード圧縮を有効または無効にします。有効にした場合、特定の閾値より長いアイテム値 (現在100バイト) は透過的に、保存時に圧縮され、参照時に解凍されます。';
$string['useserialiser'] = 'シリアライザを使用する';
$string['useserialiser_help'] = '非スカラ値をシリアライズするためのシリアライザを指定してください。有効なシリアライザは次のとおりです: Memcached::SERIALIZER_PHP または Memcached::SERIALIZER_IGBINARY。後者はmemcachedが「--enable-memcached-igbinary」オプションにより設定され、igbinary拡張モジュールがロードされている場合のみサポートされます。';
