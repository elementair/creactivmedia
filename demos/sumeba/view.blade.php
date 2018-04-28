@extends('templates.admin.master')

@section('titulo')
	Secciones de productos | ReActiv
@stop

@section('acciones')
	<a href="{{ URL::to('admin/categorias/create') }}" class="button small radius"> <i class="fa fa-plus fa-lg"></i> Crear nueva sección</a>
@stop

@section('contenido')
	{{-- <ul>
		@foreach($items as $item)
			<li>
				{{ $item->seccion }}
				@if($item['children']->first())
					<ul>
						@foreach($item['children'] as $child)
							<li class="sub">{{ $child->seccion }}</li>
						@endforeach
					</ul>
				@endif
			</li>
		@endforeach
	</ul> --}}
	

	<div class="row">
		<div class="medium-6 columns">
			<section class="panel radius">
				<header>Secciones activas</header>
				<section>
					<div class="tree1"></div>
				</section>
			</section>
		</div>

		<div class="medium-6 columns" id="actions">
			<section class="panel radius">
				<header>Acciones</header>
				<section>
					
					
				</section>
			</section>
		</div>
	</div>

@stop

@section('lastscripts')
<?php 
	$noty = Session::get('noty');
?>
<script type="text/javascript">
	@if(Session::has('noty'))
	var n = noty({
            text        : '{{ array_get($noty, "mensaje") }}',
            type        : '{{ array_get($noty, "tipo") }}',
            dismissQueue: true,
            layout      : 'topRight',
            theme       : 'default',
            maxVisible  : 10,
            timeout     : 5000
        });
	@endif

	var data = {{ $items }};
	$('.tree1').tree({
		data: data,
		autoOpen: true,
		dragAndDrop: true,
		onCanMove: function(node) {
	        if (! node.parent.parent) {
	            // Cannot move root node
	            return false;
	        }
	        else {
	            return true;
	        }
	    },
	    onCanSelectNode: function(node) {
	    	if (! node.parent.parent) { return false} else { return true };
	    },
	    onCreateLi: function(node, $li) {
	    	var nodo = $('.tree1').tree('getNodeById', 0);
			var $element = $(nodo.element);
			var $title = $element.children('div').children('.jqtree-title');
			$title.addClass('parent');
	    }
	});

	$('.tree1').bind(
		'tree.move',
		function(event) {
			event.preventDefault();
			event.move_info.do_move();
			var move = event.move_info.moved_node.id,
        		target = event.move_info.target_node.id;
        	
			$.post('{{ URL::to("admin/categorias/action") }}', {moved: move, point: target}, function(data){
				noty({
					text: data.mensaje,
					type: data.tipo,
					dismissQueue: true,
		            layout: 'topRight',
		            theme: 'default',
            		timeout     : 5000
				});
			}, "json");
		}
	);
	$('.tree1').bind(
	    'tree.select',
	    function(event) {
	        var node = event.node;
	        //alert(node.id);
	        	$('#actions section.panel section ul').slideUp('slow').remove();
	        	$('<ul class="button-group radius" style="display:none"><li><a href="{{ URL::to('admin/categorias/') }}/'+ node.id +'/edit" class="button small"><i class="fa fa-pencil"></i> Editar</a></li><li><a href="{{ URL::to('admin/categorias/') }}/'+ node.id +'/destroy" class="button small alert"><i class="fa fa-trash-o"></i> Eliminar</a></li></ul>').appendTo('#actions section.panel section').slideDown('slow');
	        
	    }
	);
</script>
@stop