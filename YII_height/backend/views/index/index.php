
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li class="current">
                    <a href="?r=index/index">会员列表</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-inline wrap_search">
            <div class="row  m-t p-w-m">
                <div class="form-group">
                    <select name="status" class="form-control inline">
                        <option value="-1">请选择状态</option>
                            <option value="1"  >正常</option>
                            <option value="0"  >已删除</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="mix_kw" placeholder="请输入关键字" class="form-control" value="">
                        <span class="input-group-btn">
                            <button type="button" class="btn  btn-primary search">
                                <i class="fa fa-search"></i>搜索
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-w-m btn-outline btn-primary pull-right" href="?r=index/member_insert">
                        <i class="fa fa-plus"></i>会员
                    </a>
                </div>
            </div>

        </form>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>ID</th>
                <th>头像</th>
                <th>姓名</th>
                <th>手机</th>
                <th>性别</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($info as $key => $val): ?>
		<tr>
                    <td><?= $val['home_id']?></td>
                    <td><img alt="image" class="img-circle" src="<?= $val['home_img']?>" style="width: 40px;height: 40px;"></td>
                    <td><?= $val['home_name']?></td>
                    <td><?= $val['home_phone']?></td>
                    <td><?= $val['home_sex']?></td>
                    <td><?php if($val['home_status'] == 1){echo '正常';}else{echo '禁用';} ?></td>
                    <td>
                        <a href="?r=index/member_info&home_id=<?= $val['home_id']?>">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                        <a class="m-l" href="?r=index/member_set&home_id=<?= $val['home_id']?>">
                            <i class="fa fa-edit fa-lg"></i>
                        </a>
                        <a class="m-l remove" href="?r=index/member_del&home_id=<?= $val['home_id']?>" data="1">
                            <i class="fa fa-trash fa-lg member_del" data-id='<?= $val['home_id']?>'></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
                <span class="pagination_count" style="line-height: 40px;">共<?= $count;?>条记录 | 每页5条</span>
            </div>
        </div>
    </div>
</div>

<!--<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    $('.member_del').click(function(){
        var obj=$(this);
        var home_id = $(this).data('id');//当前会员的id
        $.ajax({
            type: 'get',
            url: '?r=index/member_del',
            data: {home_id:home_id},
            dataType: 'json',
            success:function(result){
                if(result === 1){
                    obj.parents('tr').remove();
                }
            }
        });
    });
</script>-->
