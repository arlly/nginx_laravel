<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $from;
    protected $to;
    protected $subject;

    /**
     * SendReminderEmail constructor.
     * @param String $from
     * @param String $to
     * @param String $subject
     */
    public function __construct(String $from, String $to, String $subject)
    {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::send('email.reminder', [], function ($message) {
            $message->from($this->from, '株式会社ヘッジホッグ');
            $message->subject($this->subject);
            $message->to($this->to);
        });
    }
}
