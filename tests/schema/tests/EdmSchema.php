<?php
namespace tests;
use Lazy\Schema\SchemaDeclare;

class EdmSchema extends SchemaDeclare
{
    function schema()
    {
        $this->column('edmNo')
            ->primary()
            ->integer()
            ->isa('int')
            ->autoIncrement();

        $this->column('edmTitle')
            ->varchar(256)
            ->isa('str');

        $this->column('edmStart')
            ->datetime()
            ->isa('DateTime');

        $this->column('edmEnd')
            ->datetime()
            ->isa('DateTime');

        $this->column('edmContent')
            ->text()
            ->isa('str');

        $this->column('edmCreatedOn')
            ->timestamp();

        $this->column('edmUpdatedOn')
            ->timestamp()
            ->default( array('current_timestamp') );
    }
}
