<?php 
namespace App\Http\Middleware;

use Closure;
use DB,Session,Redirect;
header('content-type:text/html;charset=utf-8');
class LockMiddleware {

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {
        //echo "a";die;
        if(!$request->session()->get('user_id')){
            echo  "<script>alert('请先登录');location.href='login'</script>";
            //header("refresh:2;url=login");
            exit;
        }
        //如果是超级管理员，拥有所有权限
        if($request->session()->get('user_id')==1){
            return $next($request);
        }
        $permit = $this->getPermission($request);

        // 只要有权限，就可以进入这个请求
        if($permit){
            return $next($request);
        } 
        echo "<script>alert('没有权限，请联系管理员')</script>";
        exit;
        
    }

    // 获取当前路由需要的权限
    public  function getPermission($request)
    {
        //获取要访问的路由
        $action = $request->path();
        //获取当前用户的id
        $user_id=Session::get('user_id');
        //echo $user_id;die;
        //查询该用户拥有的权限
        $permissions = DB::table("role_power")
                ->select('p_rote')
                ->join("user_role","user_role.r_id",'=','role_power.r_id')
                ->join("power","power.pid",'=','role_power.pid')
                ->where("user_role.u_id",$user_id)
                ->get();
        //print_r($permissions);die;
        foreach($permissions as $v) {
            $permission[] = $v['p_rote'];
        }    
       
        if($action == 'admin/main'){
            $permission[] = 'admin/main';
        }
        $permission = array_unique($permission);
        //print_r($permission);die;
        if(in_array($action,$permission )){
            return $action;
            exit;
        }  
        
        return false;
    }
}
