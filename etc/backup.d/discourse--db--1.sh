when = hourly
path=/var/backup/discourse/db/
rm -rf ${path}
mkdir -p ${path}
declare -A servers=( \
	[mage2.ru]=14578 \
	[discourse-forum.ru]=14579 \
	[mage2.pro]=14580 \
	[discourse.pro]=14581 \
	[df.tips]=14582 \
	[oplatform.club]=14583 \
	[maian.family]=14584 \
	[dmitry.ai]=14587 \
)
for domain in "${!servers[@]}"; do
	pg_dump \
		-xOf $path$domain.sql \
		-d discourse \
		-n public \
		--host=localhost \
		--port=${servers[$domain]} \
		--username=postgres
done
