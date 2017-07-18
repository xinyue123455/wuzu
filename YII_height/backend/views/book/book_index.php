
<div class="row  border-bottom">
    <div class="col-lg-12">
        <div class="tab_title">
            <ul class="nav nav-pills">
                <li class="current">
                    <a href="?r=book/book_index">图书列表</a>
                </li>
                <li>
                    <a href="?r=book/book_cat">分类列表</a>
                </li>
                <li>
                    <a href="?r=book/book_images">图片资源</a>
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
                    <select name="cat_id" class="form-control inline">
                        <option value="0">请选择分类</option>
                        <option value="2"  >互联网</option>
                        <option value="1"  >政治类</option>
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
                    <a class="btn btn-w-m btn-outline btn-primary pull-right" href="/web/book/set">
                        <i class="fa fa-plus"></i>图书
                    </a>
                </div>
            </div>
        </form>
        <table class="table table-bordered m-t">
            <thead>
                <tr>
                    <th>图书名</th>
                    <th>分类</th>
                    <th>价格</th>
                    <th>库存</th>
                    <th>标签</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>浪潮之巅</td>
                    <td>政治类</td>
                    <td>88.88</td>
                    <td>5</td>
                    <td>浪潮,吴军</td>
                    <td>
                        <a href="?r=book/book_info">
                            <i class="fa fa-eye fa-lg"></i>
                        </a>
                        <a class="m-l" href="?r=book/book_set">
                            <i class="fa fa-edit fa-lg"></i>
                        </a>
                        <a class="m-l remove" href="javascript:void(0);" data="1">
                            <i class="fa fa-trash fa-lg"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
                <span class="pagination_count" style="line-height: 40px;">共4条记录 | 每页50条</span>
                <ul class="pagination pagination-lg pull-right" style="margin: 0 0 ;">
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

