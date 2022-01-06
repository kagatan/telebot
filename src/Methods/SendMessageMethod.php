<?php

namespace WeStacks\TeleBot\Methods;

use WeStacks\TeleBot\Abstract\TelegramMethod;
use WeStacks\TeleBot\Objects\ForceReply;
use WeStacks\TeleBot\Objects\InlineKeyboardMarkup;
use WeStacks\TeleBot\Objects\MessageEntity;
use WeStacks\TeleBot\Objects\ReplyKeyboardMarkup;
use WeStacks\TeleBot\Objects\ReplyKeyboardRemove;

/**
 * Use this method to send text messages. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 *
 * @property string $chat_id __Required: Yes__. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $text __Required: Yes__. Text of the message to be sent, 1-4096 characters after entities parsing
 * @property string $parse_mode __Required: Optional__. Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities __Required: Optional__. A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 * @property boolean $disable_web_page_preview __Required: Optional__. Disables link previews for links in this message
 * @property boolean $disable_notification __Required: Optional__. Sends the message silently. Users will receive a notification with no sound.
 * @property boolean $protect_content __Required: Optional__. Protects the contents of the sent message from forwarding and saving
 * @property integer $reply_to_message_id __Required: Optional__. If the message is a reply, ID of the original message
 * @property boolean $allow_sending_without_reply __Required: Optional__. Pass True, if the message should be sent even if the specified replied-to message is not found
 * @property Keyboard $reply_markup __Required: Optional__. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 */
class SendMessageMethod extends TelegramMethod
{
	protected string $method = 'sendMessage';
	protected string $expect = 'Message';

	protected array $parameters = [
		'chat_id' => 'string',
		'text' => 'string',
		'parse_mode' => 'string',
		'entities' => 'MessageEntity[]',
		'disable_web_page_preview' => 'boolean',
		'disable_notification' => 'boolean',
		'protect_content' => 'boolean',
		'reply_to_message_id' => 'integer',
		'allow_sending_without_reply' => 'boolean',
		'reply_markup' => 'Keyboard',
	];
}
