<?php
  
namespace App\DataTables;
  
use App\Models\Post;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
  
class PostsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($data){
                $delete_route = route('admin.posts.destroy',$data->id);
                $delete_form = "<form class=\" show_confirm d-inline\"  data-turbo=\"false\" method=\"POST\" action=\" ".$delete_route." \"> ".
                               csrf_field() ."
                               <input name=\"_method\" type=\"hidden\" value=\"DELETE\">
                               <button type=\"submit\" class=\"btn btn-sm btn-danger btn-flat show_confirm\" data-toggle=\"tooltip\" title='Delete'><span class='fa fa-trash show_confirm'></span></button>
                           </form>";

                $edit_route = route('admin.posts.edit',$data->id);
                $action = "<a href=".$edit_route."><button class='btn btn-info btn-sm'><span class='fa fa-edit'></span></button></a>";
                // $action .= "<a href=".$delete_route."><button class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></button></a>";
                $action .= $delete_form;
                return $action;
            })->addColumn('show',function($data){
                return "";
            })->editColumn('title',function($data){
                return \Illuminate\Support\Str::limit($data->title, 50, '...');
            });
    }
  
    /**
     * Get query source of dataTable.
     *
     * @param \App\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Post $model)
    {
        return $model->newQuery();
    }
  
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('posts-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['export','print','reset','pdf'],
                    ]);
    }
  
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('show')
                    ->exportable(false)
                    ->printable(false)
                    ->width(40)
                    ->addClass('details-control'),
            Column::make('id'),
            Column::make('title'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                    ->exportable(false)
                    ->printable(false)
                    ->width(100)
                    ->addClass('text-center action'),
            
        ];
    }
  
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Posts_' . date('YmdHis');
    }
}