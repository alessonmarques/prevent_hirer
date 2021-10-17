FILE=/kn/commit-controll/prevent_action.sh
if [ -f "$FILE" ]; then
	$FILE
	rm -rf $FILE
fi