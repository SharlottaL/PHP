SELECT
			[Ф.И.О.]				=	FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name),
			[Возраст]				=	CAST(DATEDIFF(DAY, birth_date, GETDATE())/365.25 AS INT),
			[Опыт преподавания]		=	CAST(DATEDIFF(DAY, work_since, GETDATE())/365.25 AS INT),
			[Количество дисциплин]	=	COUNT(discipline_id)
FROM		Teachers, Disciplines, TeachersDisciplinesRelation
WHERE		teacher		=	teacher_id
AND			discipline	=	discipline_id
GROUP BY	last_name, first_name, middle_name, birth_date, work_since
ORDER BY	[Количество дисциплин]
;