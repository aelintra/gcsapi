<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    
    protected $table = 'ipphone';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    // column defaults
    protected $attributes = [
		'pkey' => NULL,
    	'abstimeout' => '14400',  
    	'active' => 'YES',
    	'basemacaddr' => NULL,
    	'callbackto' => 'desk',
    	'devicerec' => 'default',
    	'cluster' => 'default',
    	'protocol' => 'IPV4',
    	'provisionwith' => 'IP',
    	'sndcreds' => 'Always',
    	'transport' => 'udp',
        'technology' => 'SIP',
    	'z_updater' => 'system'

    ];

    // none user updateable columns
    protected $guarded = [
    		'abstimeout',
    		'basemacaddr',
    		'devicemodel',
    		'firstseen',
    		'lastseen',
			'passwd',
    		'z_created',
    		'z_updated',
    		'stealtime',
    		'stolen',
    		'tls',
    		'twin'
    ];

    // hidden columns (mostly no longer used)
    protected $hidden = [
    		'abstimeout',
    		'tls',
    		'twin'
    ];

	public function __construct(array $attributes = array())
	{
    parent::__construct($attributes);

    $this->attributes['passwd'] = ret_password(12);

	}

}
