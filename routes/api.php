<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

use App\Http\Controllers\AgentController;
Route::get('agents', [AgentController::class, 'index']);
Route::get('agents/{agent}', [AgentController::class, 'show']);
Route::post('agents', [AgentController::class, 'save']);
Route::put('agents/{agent}', [AgentController::class, 'update']);
Route::delete('agents/{agent}', [AgentController::class, 'delete']);

/*
Route::get('agents', 'AgentController@index');
Route::get('agents/{agent}', 'AgentController@show');
Route::post('agents', 'AgentController@save');
Route::put('agents/{agent}', 'AgentController@update');
Route::delete('agents/{agent}', 'AgentController@delete');
*/


use App\Http\Controllers\AstAmiController;
Route::get('astamis', [AstAmiController::class, 'index']);
Route::get('astamis/CoreSettings', [AstAmiController::class, 'coresettings']);
Route::get('astamis/CoreStatus', [AstAmiController::class, 'corestatus']);
Route::get('astamis/DBget/{id}/{key}', [AstAmiController::class, 'dbget']);
Route::get('astamis/ExtensionState/{id}{context?}', [AstAmiController::class, 'extensionstate']);
Route::get('astamis/MailboxCount/{id}', [AstAmiController::class, 'mailboxcount']);
Route::get('astamis/MailboxStatus/{id}', [AstAmiController::class, 'mailboxstatus']);
Route::get('astamis/QueueStatus/{id}', [AstAmiController::class, 'queuestatus']);
Route::get('astamis/QueueSummary/{id}', [AstAmiController::class, 'queuesummary']);
Route::get('astamis/Reload', [AstAmiController::class, 'reload']);
Route::get('astamis/SIPshowpeer/{id}', [AstAmiController::class, 'sipshowpeer']);
Route::post('astamis/originate', [AstAmiController::class, 'originate']);
Route::put('astamis/DBput/{id}/{key}/{value}', [AstAmiController::class, 'dbput']);
Route::delete('astamis/DBdel/{id}/{key}', [AstAmiController::class, 'dbdel']);
Route::delete('astamis/Hangup/{id}/{key}', [AstAmiController::class, 'hangup']);
Route::get('astamis/{action}/{id?}', [AstAmiController::class, 'getlist']);

/*
Route::get('astamis', 'AstAmiController@index');
//Route::get('astamis/ConfbridgeList/{id}', 'AstAmiController@confbridgelist');
Route::get('astamis/CoreSettings', 'AstAmiController@coresettings');
Route::get('astamis/CoreStatus', 'AstAmiController@corestatus');
Route::get('astamis/DBget/{id}/{key}', 'AstAmiController@dbget');
Route::get('astamis/ExtensionState/{id}{context?}', 'AstAmiController@extensionstate');
Route::get('astamis/MailboxCount/{id}', 'AstAmiController@mailboxcount');
Route::get('astamis/MailboxStatus/{id}', 'AstAmiController@mailboxstatus');
Route::get('astamis/QueueStatus/{id}', 'AstAmiController@queuestatus');
Route::get('astamis/QueueSummary/{id}', 'AstAmiController@queuesummary');
Route::get('astamis/Reload', 'AstAmiController@reload');
Route::get('astamis/SIPshowpeer/{id}', 'AstAmiController@sipshowpeer');
Route::post('astamis/originate', 'AstAmiController@originate');
Route::put('astamis/DBput/{id}/{key}/{value}', 'AstAmiController@dbput');
Route::delete('astamis/DBdel/{id}/{key}', 'AstAmiController@dbdel');
Route::get('astamis/{action}/{id?}', 'AstAmiController@getlist');
*/

use App\Http\Controllers\BackupController;
Route::get('backups', [BackupController::class, 'index']);
Route::get('backups/new', [BackupController::class, 'new']);
Route::get('backups/{backup}', [BackupController::class, 'download']);
Route::post('backups', [BackupController::class, 'save']);
Route::put('backups/{backup}', [BackupController::class, 'update']);
Route::delete('backups/{backup}', [BackupController::class, 'delete']);

/*
Route::get('backups', 'BackupController@index');
Route::get('backups/new', 'BackupController@new');
Route::get('backups/{backup}', 'BackupController@download');
Route::post('backups', 'BackupController@save');
Route::put('backups/{backup}', 'BackupController@update');
Route::delete('backups/{backup}', 'BackupController@delete');
*/

use App\Http\Controllers\CosCloseController;
Route::get('coscloses', [CosCloseController::class, 'index']);
Route::get('coscloses/{cosclose}', [CosCloseController::class, 'show']);
Route::post('coscloses', [CosCloseController::class, 'save']);
Route::put('coscloses/{cosclose}', [CosCloseController::class, 'update']);
Route::delete('coscloses/{cosclose}', [CosCloseController::class, 'delete']);

/*
Route::get('coscloses', 'CosCloseController@index');
Route::get('coscloses/{cosclose}', 'CosCloseController@show');
Route::post('coscloses', 'CosCloseController@save');
Route::put('coscloses/{cosclose}', 'CosCloseController@update');
Route::delete('coscloses/{cosclose}', 'CosCloseController@delete');
*/

use App\Http\Controllers\CosOpenController;
Route::get('cosopens', [CosOpenController::class, 'index']);
Route::get('cosopens/{cosopen}', [CosOpenController::class, 'show']);
Route::post('cosopens', [CosOPenController::class, 'save']);
Route::put('cosopens/{cosopen}', [CosOpenController::class, 'update']);
Route::delete('cosopens/{cosopen}', [CosOpenController::class, 'delete']);

/*
Route::get('cosopens', 'CosOpenController@index');
Route::get('cosopens/{cosopen}', 'CosOpenController@show');
Route::post('cosopens', 'CosOpenController@save');
Route::put('cosopens/{cosopen}', 'CosOpenController@update');
Route::delete('cosopens/{cosopen}', 'CosOpenController@delete');
*/

use App\Http\Controllers\ClassOfServiceController;
Route::get('cosrules', [ClassOfServiceController::class, 'index']);
Route::get('cosrules/{classofservice}', [CosCloseClassOfServiceControllerController::class, 'show']);
Route::post('cosrules', [ClassOfServiceController::class, 'save']);
Route::put('cosrules/{classofservice}', [ClassOfServiceController::class, 'update']);
Route::delete('cosrules/{classofservice}', [ClassOfServiceController::class, 'delete']);

/*
Route::get('cosrules', 'ClassOfServiceController@index');
Route::get('cosrules/{classofservice}', 'ClassOfServiceController@show');
Route::post('cosrules', 'ClassOfServiceController@save');
Route::put('cosrules/{classofservice}', 'ClassOfServiceController@update');
Route::delete('cosrules/{classofservice}', 'ClassOfServiceController@delete');
*/

use App\Http\Controllers\CustomAppController;
Route::get('customapps', [CustomAppController::class, 'index']);
Route::get('customapps/{cosopen}', [CustomAppController::class, 'show']);
Route::post('customapps', [CustomAppController::class, 'save']);
Route::put('customapps/{cosopen}', [CustomAppController::class, 'update']);
Route::delete('customapps/{cosopen}', [CustomAppController::class, 'delete']);

/*
Route::get('customapps', 'CustomAppController@index');
Route::get('customapps/{customapp}', 'CustomAppController@show');
Route::post('customapps', 'CustomAppController@save');
Route::put('customapps/{customapp}', 'CustomAppController@update');
Route::delete('customapps/{customapp}', 'CustomAppController@delete');
*/

use App\Http\Controllers\DayTimerController;
Route::get('daytimers', [DayTimerController::class, 'index']);
Route::get('daytimers/{daytimer}', [DayTimerController::class, 'show']);
Route::post('daytimers', [DayTimerController::class, 'save']);
Route::put('daytimers/{daytimer}', [DayTimerController::class, 'update']);
Route::delete('daytimers/{daytimer}', [DayTimerController::class, 'delete']);

/*
Route::get('daytimers', 'DayTimerController@index');
Route::get('daytimers/{daytimer}', 'DayTimerController@show');
Route::post('daytimers', 'DayTimerController@save');
Route::put('daytimers/{daytimer}', 'DayTimerController@update');
Route::delete('daytimers/{daytimer}', 'DayTimerController@delete');
*/

use App\Http\Controllers\DestinationController;
Route::get('destinations', [DestinationController::class, 'index']);

/*
Route::get('destinations', 'DestinationController@index');
*/

use App\Http\Controllers\ExtensionController;
Route::get('extensions', [ExtensionController::class, 'index']);
Route::get('extensions/{extension}', [ExtensionController::class, 'show']);
Route::get('extensions/{extension}/runtime', [ExtensionController::class, 'showruntime']);
Route::post('extensions/mailbox', [ExtensionController::class, 'mailbox']);
Route::post('extensions/provisioned', [ExtensionController::class, 'provisioned']);
Route::post('extensions/vxt', [ExtensionController::class, 'vxt']);
Route::post('extensions/unprovisioned', [ExtensionController::class, 'unprovisioned']);
Route::post('extensions/webrtc', [ExtensionController::class, 'webrtc']);
Route::put('extensions/{extension}', [ExtensionController::class, 'update']);
Route::put('extensions/{extension}/runtime', [ExtensionController::class, 'updateruntime']);
Route::delete('extensions/{extension}', [ExtensionController::class, 'delete']);

/*
Route::get('extensions', [ExtensionController::class, 'index']);
Route::get('extensions/{extension}', 'ExtensionController@show');
Route::get('extensions/{extension}/runtime', 'ExtensionController@showruntime');
Route::post('extensions/mailbox', 'ExtensionController@mailbox');
Route::post('extensions/provisioned', 'ExtensionController@provisioned');
Route::post('extensions/vxt', 'ExtensionController@vxt');
Route::post('extensions/unprovisioned', 'ExtensionController@unprovisioned');
Route::put('extensions/{extension}', 'ExtensionController@update');
Route::put('extensions/{extension}/runtime', 'ExtensionController@updateruntime');
Route::delete('extensions/{extension}', 'ExtensionController@delete');
*/

use App\Http\Controllers\FirewallController;
Route::get('firewalls/ipv4', [FirewallController::class, 'ipv4']);
Route::get('firewalls/ipv6', [FirewallController::class, 'ipv6']);
Route::post('firewalls/ipv4', [FirewallController::class, 'ipv4save']);
Route::post('firewalls/ipv6', [FirewallController::class, 'ipv6save']);
Route::put('firewalls/ipv4', [FirewallController::class, 'ipv4restart']);
Route::put('firewalls/ipv6', [FirewallController::class, 'ipv6restart']);

/*
Route::get('firewalls/ipv4', 'FirewallController@ipv4');
Route::get('firewalls/ipv6', 'FirewallController@ipv6');
Route::post('firewalls/ipv4', 'FirewallController@ipv4save');
Route::post('firewalls/ipv6', 'FirewallController@ipv6save');
Route::put('firewalls/ipv4', 'FirewallController@ipv4restart');
Route::put('firewalls/ipv6', 'FirewallController@ipv6restart');
*/

use App\Http\Controllers\GreetingController;
Route::get('greetings', [GreetingController::class, 'index']);
Route::get('greetings/{greeting}', [GreetingController::class, 'download']);
Route::post('greetings', [GreetingController::class, 'save']);
Route::delete('greetings/{greeting}', [GreetingController::class, 'delete']);

/*
Route::get('greetings', 'GreetingController@index');
Route::get('greetings/{greeting}', 'GreetingController@download');
Route::post('greetings', 'GreetingController@save');
Route::delete('greetings/{greeting}', 'GreetingController@delete');
*/


use App\Http\Controllers\holidaytimerController;
Route::get('holidaytimers', [holidaytimerController::class, 'index']);
Route::get('holidaytimers/{holidaytimer}', [holidaytimerController::class, 'show']);
Route::post('holidaytimers', [holidaytimerController::class, 'save']);
Route::put('holidaytimers/{holidaytimer}', [holidaytimerController::class, 'update']);
Route::delete('holidaytimers/{holidaytimer}', [holidaytimerController::class, 'delete']);

/*
Route::get('holidaytimers', 'HolidayTimerController@index');
Route::get('holidaytimers/{holidaytimer}', 'HolidayTimerController@show');
Route::post('holidaytimers', 'HolidayTimerController@save');
Route::put('holidaytimers/{holidaytimer}', 'HolidayTimerController@update');
Route::delete('holidaytimers/{holidaytimer}', 'HolidayTimerController@delete');
*/

use App\Http\Controllers\InboundRouteController;
Route::get('inboundroutes', [InboundRouteController::class, 'index']);
Route::get('inboundroutes/{inboundroute}', [InboundRouteController::class, 'show']);
Route::post('inboundroutes', [InboundRouteController::class, 'save']);
Route::put('inboundroutes/{inboundroute}', [InboundRouteController::class, 'update']);
Route::delete('inboundroutes/{inboundroute}', [InboundRouteController::class, 'delete']);

/*
Route::get('inboundroutes', 'InboundRouteController@index');
Route::get('inboundroutes/{inboundroute}', 'InboundRouteController@show');
Route::post('inboundroutes', 'InboundRouteController@save');
Route::put('inboundroutes/{inboundroute}', 'InboundRouteController@update');
Route::delete('inboundroutes/{inboundroute}', 'InboundRouteController@delete');
*/

use App\Http\Controllers\IvrController;
Route::get('ivrs', [IvrController::class, 'index']);
Route::get('ivrs/{ivr}', [IvrController::class, 'show']);
Route::post('ivrs', [IvrController::class, 'save']);
Route::put('ivrs/{ivr}', [IvrController::class, 'update']);
Route::delete('ivrs/{ivr}', [IvrController::class, 'delete']);

/*
Route::get('ivrs', 'IvrController@index');
Route::get('ivrs/{ivr}', 'IvrController@show');
Route::post('ivrs', 'IvrController@save');
Route::put('ivrs/{ivr}', 'IvrController@update');
Route::delete('ivrs/{ivr}', 'IvrController@delete');
*/

use App\Http\Controllers\LogController;
Route::get('logs', [LogController::class, 'index']);
Route::get('logs/cdrs{limit}', [LogController::class, 'showcdr']);

/*
Route::get('logs', 'LogController@index');
Route::get('logs/cdrs/{limit?}', 'LogController@showcdr');
*/

use App\Http\Controllers\QueueController;
Route::get('queues', [QueueController::class, 'index']);
Route::get('queues/{queue}', [QueueController::class, 'show']);
Route::post('queues', [QueueController::class, 'save']);
Route::put('queues/{queue}', [QueueController::class, 'update']);
Route::delete('queues/{queue}', [QueueController::class, 'delete']);

/*
Route::get('queues', 'QueueController@index');
Route::get('queues/{queue}', 'QueueController@show');
Route::post('queues', 'QueueController@save');
Route::put('queues/{queue}', 'QueueController@update');
Route::delete('queues/{queue}', 'QueueController@delete');
*/

use App\Http\Controllers\SnapShotController;
Route::get('snapshots', [SnapShotController::class, 'index']);
Route::get('snapshots/new', [SnapShotController::class, 'new']);
Route::get('snapshots/{snapshot}', [SnapShotController::class, 'download']);
Route::post('snapshots', [SnapShotController::class, 'save']);
Route::put('snapshots/{snapshot}', [SnapShotController::class, 'update']);
Route::delete('snapshots/{snapshot}', [SnapShotController::class, 'delete']);

/*
Route::get('snapshots', 'SnapShotController@index');
Route::get('snapshots/new', 'SnapShotController@new');
Route::get('snapshots/{snapshot}', 'SnapShotController@download');
Route::post('snapshots', 'SnapShotController@save');
Route::put('snapshots/{snapshot}', 'SnapShotController@update');
Route::delete('snapshots/{snapshot}', 'SnapShotController@delete');
*/

use App\Http\Controllers\RingGroupController;
Route::get('ringgroups', [RingGroupController::class, 'index']);
Route::get('ringgroups/{ringgroup}', [RingGroupController::class, 'show']);
Route::post('ringgroups', [RingGroupController::class, 'save']);
Route::put('ringgroups/{ringgroup}', [RingGroupController::class, 'update']);
Route::delete('ringgroups/{ringgroup}', [RingGroupController::class, 'delete']);

/*
Route::get('ringgroups', 'RingGroupController@index');
Route::get('ringgroups/{ringgroup}', 'RingGroupController@show');
Route::post('ringgroups', 'RingGroupController@save');
Route::put('ringgroups/{ringgroup}', 'RingGroupController@update');
Route::delete('ringgroups/{ringgroup}', 'RingGroupController@delete');
*/

use App\Http\Controllers\RouteController;
Route::get('routes', [RouteController::class, 'index']);
Route::get('routes/{route}', [RouteController::class, 'show']);
Route::post('routes', [RouteController::class, 'save']);
Route::put('routes/{route}', [RouteController::class, 'update']);
Route::delete('routes/{route}', [RouteController::class, 'delete']);

/*
Route::get('routes', 'RouteController@index');
Route::get('routes/{route}', 'RouteController@show');
Route::post('routes', 'RouteController@save');
Route::put('routes/{route}', 'RouteController@update');
Route::delete('routes/{route}', 'RouteController@delete');
*/ 

use App\Http\Controllers\SysCommandController;
Route::get('syscommands', [SysCommandController::class, 'index']);
Route::get('syscommands/commit', [SysCommandController::class, 'commit']);
Route::get('syscommands/reboot', [SysCommandController::class, 'reboot']);
Route::get('syscommands/pbxrunstate', [SysCommandController::class, 'pbxrunstate']);
Route::get('syscommands/start', [SysCommandController::class, 'start']);
Route::get('syscommands/stop', [SysCommandController::class, 'stop']);

/*
Route::get('syscommands', 'SysCommandController@index');
Route::get('syscommands/commit', 'SysCommandController@commit');
Route::get('syscommands/reboot', 'SysCommandController@reboot');
Route::get('syscommands/pbxrunstate', 'SysCommandController@pbxrunstate');
Route::get('syscommands/pbxstart', 'SysCommandController@start');
Route::get('syscommands/pbxstop', 'SysCommandController@stop');
*/

use App\Http\Controllers\SysglobalController;
Route::get('sysglobals', [SysglobalController::class, 'index']);
Route::put('sysglobals', [SysglobalController::class, 'update']);

/*
Route::get('sysglobals', 'SysglobalController@index');
Route::put('sysglobals', 'SysglobalController@update');
*/

use App\Http\Controllers\TemplateController;
Route::get('templates', [TemplateController::class, 'index']);
Route::get('templates/{template}', [TemplateController::class, 'show']);
Route::post('templates', [TemplateController::class, 'save']);
Route::put('templates/{template}', [TemplateController::class, 'update']);
Route::delete('templates/{template}', [TemplateController::class, 'delete']);

/*
Route::get('templates', 'TemplateController@index');
Route::get('templates/{template}', 'TemplateController@show');
Route::post('templates', 'TemplateController@save');
Route::put('templates/{template}', 'TemplateController@update');
Route::delete('templates/{template}', 'TemplateController@delete');
*/

use App\Http\Controllers\TenantController;
Route::get('tenants', [TenantController::class, 'index']);
Route::get('tenants/{tenant}', [TenantController::class, 'show']);
Route::post('tenants', [TenantController::class, 'save']);
Route::put('tenants/{tenant}', [TenantController::class, 'update']);
Route::delete('tenants/{tenant}', [TenantController::class, 'delete']);

/*
Route::get('tenants', 'TenantController@index');
Route::get('tenants/{tenant}', 'TenantController@show');
Route::post('tenants', 'TenantController@save');
Route::put('tenants/{tenant}', 'TenantController@update');
Route::delete('tenants/{tenant}', 'TenantController@delete');
*/

use App\Http\Controllers\TrunkController;
Route::get('trunks', [TrunkController::class, 'index']);
Route::get('trunks/{trunk}', [TrunkController::class, 'show']);
Route::post('trunks', [TrunkController::class, 'save']);
Route::put('trunks/{trunk}', [TrunkController::class, 'update']);
Route::delete('trunks/{trunk}', [TrunkController::class, 'delete']);

/*
Route::get('trunks', 'TrunkController@index');
Route::get('trunks/{trunk}', 'TrunkController@show');
Route::post('trunks', 'TrunkController@save');
Route::put('trunks/{trunk}', 'TrunkController@update');
Route::delete('trunks/{trunk}', 'TrunkController@delete');
*/

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. Check your URI for correctness'], 404);
});
