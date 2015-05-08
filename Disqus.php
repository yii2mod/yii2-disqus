<?php

namespace yii2mod\disqus;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * To use Disqus Widget, you need to configure its [[options]] property. For example,
 *
 * ```
 * echo Disqus::widget([
 *     'options' => ['shortname' => 'DISQUS_SHORTNAME']
 * ]);
 * ```
 */
class Disqus extends Widget
{
    /**
     * @var array Disqus widget options
     */
    public $options = [];

    /**
     * @var boolean whether to display the comment count summary.
     */
    public $showCount = false;

    /**
     * @var boolean whether to display the credits text after the widget itself.
     */
    public $showCredits = false;

    /**
     * @var string text for Disqus credits to be displayed at the end of the widget.
     */
    public $credits;

    /**
     * @var string text to be displayed if browser does not support javascript.
     */
    public $noScript;

    /**
     * @var array HTML attributes for the noScript message container.
     */
    public $noScriptOptions = ['class' => 'alert alert-info'];

    /**
     * @var string variables for disqus script.
     */
    protected $variables = '';

    /**
     * Initializes the widget.
     */
    public function init()
    {
        if (empty($this->options['shortname'])) {
            throw new InvalidConfigException('Property "shortname" must be set in settings.');
        }
        if ($this->credits === null) {
            $this->credits = Html::a('Comments powered by Disqus', 'http://disqus.com/?ref_noscript');
        }
        $this->noScript = "Please enable JavaScript to view the {$this->credits}.";
    }

    /**
     * Executes the widget.
     * @return string the result of widget execution to be outputted.
     */
    public function run()
    {
        echo $this->render($this->showCount ? 'count' : 'comments', $this->getViewParams());
    }

    /**
     * Get view params
     * @return string
     */
    protected function getViewParams()
    {
        foreach ($this->options as $key => $value) {
            $this->variables .= ($key == 'disable_mobile') ?
                "var disqus_{$key} = {$value};\n" :
                "var disqus_{$key} = '{$value}';\n";
        }
        return [
            'variables' => $this->variables,
            'credits' => $this->showCredits ? $this->credits : '',
            'noScript' => $this->renderNoScriptContainer()
        ];
    }

    /**
     * Render the noScript container
     *
     * @return string
     */
    protected function renderNoScriptContainer()
    {
        if ($this->noScript == false) {
            return '';
        }
        return Html::tag('noscript', Html::tag('div', $this->noScript, $this->noScriptOptions));
    }
}
