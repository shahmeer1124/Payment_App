<?php

namespace App\Admin\Controllers;

use App\Models\billinfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'billinfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new billinfo());
        $grid->column('id',"ID");
        $grid->column('brand_name',"Brand Name");
        $grid->column('brand_logo',"Brand log");
        $grid->column('due',"Due");
        $grid->column('due_info',"Due Info");
        $grid->column('brand_id',"Brand Id");
        $grid->column('due_date',"Due Date");
        $grid->column('status',"Status");

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(billinfo::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new billinfo());
     
        $form->text('brand_name',"Brand Name");
        $form->image('brand_logo',"Brand log");
        $form->number('due',"Due");
        $form->text('due_info',"Due Info");
        $form->number('brand_id',"Brand Id");
        $form->date('due_date',"Due Date");
        $form->number('status',"Status");


        return $form;
    }
}
