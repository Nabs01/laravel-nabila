<?php

use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_portofolios')->insert([
            'icon' => 'fa fa-database',
            'title' => 'Database',
            'content'=> 'Is a person who is responsible for the entire database in an organization, 
            from designing, implementing, maintaining to correcting errors that are in the database.',
            ]);
    
            DB::table('tb_portofolios')->insert([
                'icon' => 'fa fa-briefcase',
                'title' => 'Web Designer',
                'content'=> 'A Web designer is someone who prepares content for the Web. 
                This role is mainly related to the styling and layout of pages with content, including text and images.',
                ]);
            
            DB::table('tb_portofolios')->insert([
                'icon' => 'glyphicon glyphicon-pencil',
                'title' => 'Writing Novel',
                'content'=> 'A novelist is an author or writer of novels, though often novelists also write in other genres of both fiction and non-fiction. 
                Some novelists are professional novelists, thus make a living writing novels and other fiction, while others aspire to support themselves in this way or write as an avocation. ',
                    ]);
    }
}
