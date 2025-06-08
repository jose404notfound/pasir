{{- define "myapp.name" -}}
myapp-dev
{{- end -}}

{{- define "myapp.fullname" -}}
{{ printf "%s-%s" .Release.Name (include "myapp.name" .) }}
{{- end -}}

{{- define "myapp.mysqlSecretName" -}}
{{ .Values.mysql.secretName }}
{{- end -}}

{{- define "myapp.mysqlServiceName" -}}
{{ printf "%s-mysql" .Release.Name }}
{{- end -}}
