<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets activos',
  'nav-completed-tickets'            => 'Tickets completados',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Asunto',
  'table-owner'                      => 'Propietario',
  'table-status'                     => 'Estado',
  'table-last-updated'               => 'Última actualización',
  'table-priority'                   => 'Prioridad',
  'table-agent'                      => 'Agente',
  'table-category'                   => 'Categoría',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'No hay datos disponibles en la tabla',
  'table-info'                       => 'Mostrando _START_ to _END_ de _TOTAL_ registros',
  'table-info-empty'                 => 'Mostrando 0 to 0 de 0 registros',
  'table-info-filtered'              => '(filtered from _MAX_ total entries)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Show _MENU_ entries',
  'table-loading-results'            => 'Cargando...',
  'table-processing'                 => 'Procesando...',
  'table-search'                     => 'Buscar:',
  'table-zero-records'               => 'No hay coincidencias encontradas',
  'table-paginate-first'             => 'Primero',
  'table-paginate-last'              => 'Último',
  'table-paginate-next'              => 'Siguiente',
  'table-paginate-prev'              => 'Anterior',
  'table-aria-sort-asc'              => ': activate to sort column ascending',
  'table-aria-sort-desc'             => ': activate to sort column descending',

  'btn-back'                         => 'Regresar',
  'btn-cancel'                       => 'Cancelar', // NEW
  'btn-close'                        => 'Cerrar',
  'btn-delete'                       => 'Eliminar',
  'btn-edit'                         => 'Editar',
  'btn-mark-complete'                => 'Marcar como completado',
  'btn-submit'                       => 'Enviar',

  'agent'                            => 'Agente',
  'category'                         => 'Categoría',
  'colon'                            => ': ',
  'comments'                         => 'Comentarios',
  'created'                          => 'Creado',
  'description'                      => 'Descripción',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'última actualización',
  'no-replies'                       => 'No hay respuestas.',
  'owner'                            => 'Propietario',
  'priority'                         => 'Prioridad',
  'reopen-ticket'                    => 'Reabrir ticket',
  'reply'                            => 'Responder',
  'responsible'                      => 'Responsable',
  'status'                           => 'Estado',
  'subject'                          => 'Asunto',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk main page',

// tickets/____
  'index-my-tickets'                 => 'Mis Tickets',
  'btn-create-new-ticket'            => 'Crear nuevo ticket',
  'index-complete-none'              => 'No hay tickets completados',
  'index-active-check'               => 'Asegurate de revisar tickets activos si no puedes encontrar tu ticket',
  'index-active-none'                => 'No hay tickets activos',
  'index-create-new-ticket'          => 'crear nuevo ticket',
  'index-complete-check'             => 'Asegurate de revisar tickets completados si no puedes encontrar tu ticket',

  'create-ticket-title'              => 'Nuevo título de ticket',
  'create-new-ticket'                => 'Crear nuevo ticket',
  'create-ticket-brief-issue'        => 'Asunto del ticket',
  'create-ticket-describe-issue'     => 'Describe detalladamente tu problema',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Estás seguro que deseas eliminar: ',
  'show-ticket-modal-delete-title'   => 'Eliminar ticket',
  'show-ticket-modal-delete-message' => '¿Estás seguro que deseas eliminar este ticket: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agentes :names están agregados a agentes',
  'administrators-are-added-to-administrators'      => 'Administradores :names están agregados a administradores', //New
  'agents-joined-categories-ok'                     => 'Unidos a la categoría satisfactoriamente',
  'agents-is-removed-from-team'                     => 'Ha\n sido removido\s :name del equipo de agentes',
  'administrators-is-removed-from-team'             => 'Ha\n sido removido\s :name del equipo de administradores', // New

// CategoriesController
  'category-name-has-been-created'   => 'La categoría :name ha sido creada!',
  'category-name-has-been-modified'  => 'La categoría :name ha sido modificada!',
  'category-name-has-been-deleted'   => 'La categoría :name ha sido eliminada!',

// PrioritiesController
  'priority-name-has-been-created'   => 'La prioridad :name ha sido creada!',
  'priority-name-has-been-modified'  => 'La prioridad :name ha sido modificada!',
  'priority-name-has-been-deleted'   => 'La prioridad :name ha sido eliminada!',
  'priority-all-tickets-here'        => 'Todas las prioridades relacionadas aquí',

// StatusesController
  'status-name-has-been-created'   => 'El estado :name ha sido creado!',
  'status-name-has-been-modified'  => 'El estado :name ha sido modificado!',
  'status-name-has-been-deleted'   => 'El estado :name ha sido eliminado!',
  'status-all-tickets-here'        => 'Todos los estados relacionados aquí',

// CommentsController
  'comment-has-been-added-ok'        => 'El comentario ha sido agregado satisfactoriamente',

// NotificationsController
  'notify-new-comment-from'          => 'Nuevo comentario de ',
  'notify-on'                        => ' on ',
  'notify-status-to-complete'        => ' estado a completado',
  'notify-status-to'                 => ' estado a ',
  'notify-transferred'               => ' transferido ',
  'notify-to-you'                    => ' a ti',
  'notify-created-ticket'            => ' ticket creado ',
  'notify-updated'                   => ' actualizado ',

 // TicketsController
  'the-ticket-has-been-created'      => 'El ticket ha sido creado!',
  'the-ticket-has-been-modified'     => 'El ticket ha sido modificado!',
  'the-ticket-has-been-deleted'      => 'El ticket :name ha sido eliminado!',
  'the-ticket-has-been-completed'    => 'El ticket :name ha sido completado',
  'the-ticket-has-been-reopened'     => 'El ticket :name ha sido reabierto',
  'you-are-not-permitted-to-do-this' => 'No tienes permisos para hacer esta acción!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'No tienes permitido el acceso a esta página',

];
