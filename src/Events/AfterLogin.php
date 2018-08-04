<?php
/**
 * luffy-laravel-tools
 * AfterLogin.php.
 * @author luffyzhao@vip.126.com
 */

namespace luffyzhao\laravelTools\Events;


use Illuminate\Queue\SerializesModels;
use luffyzhao\laravelTools\Auths\RedisTokeSubject;

class AfterLogin
{
    use SerializesModels;
    /**
     * @var RedisTokeSubject
     * @author luffyzhao@vip.126.com
     */
    protected $user;
    public function __construct(RedisTokeSubject $user)
    {
        $this->user = $user;
    }
}