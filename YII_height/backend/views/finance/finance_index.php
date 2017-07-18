
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li class="current">
                    <a href="?r=finance/finance_index">订单列表</a>
                </li>
                <li>
                    <a href="?r=finance/finance_account">财务流水</a>
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
                        <option value="1">已支付</option>
                        <option value="-8">待支付</option>
                        <option value="0">已关闭</option>
                    </select>
                </div>
            </div>
        </form>
            <hr/>
        <table class="table table-bordered m-t">
            <thead>
                <tr>
                    <th>订单编号</th>
                    <th>名称</th>
                    <th>价格</th>
                    <th>支付时间</th>
                    <th>状态</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2017031230</td>
                    <td>php开发教程 × 3<br/></td>
                    <td>135.00</td>
                    <td>2017-03-12 22:28</td>
                    <td>已支付</td>
                    <td>2017-03-12 19:45</td>
                    <td>
                        <a href="?r=finance/finance_pay_info">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
		<span class="pagination_count" style="line-height: 40px;">共14条记录 | 每页50条</span>
		<ul class="pagination pagination-lg pull-right" style="margin: 0 0 ;">
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


