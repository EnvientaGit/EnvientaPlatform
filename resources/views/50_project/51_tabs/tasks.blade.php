<?php
/**
 * projectmanager hivása iframe -be
 */
$remoteModules = config('app.remoteModules');
?>
<div id="tasks" style="width:100%; height:100%;">
<h2>{{$project->title}}</h2>
<iframe id="ifrmProjectManager" src="" style="width:100%; height:600px"></iframe>
</div>
<script type="text/javascript">
var sessionId = "{{ $sessionid }}";
var projectId = "{{ $project->id }}";
var apiURL = "{{ url('./pmapi') }}";
var url = "{{$remoteModules['projectManager'] }}"+
"?option=tasks&task=show"+
"&sessionid="+sessionId+"&projectid="+projectId+"&callerapiurl="+encodeURI(apiURL);
$('#ifrmProjectManager').attr('src',url);
</script>

